<?php
namespace FedEx\Utility\CodeGenerator;

/**
 * Converts complex types in .wsdl file to PHP class files
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Utilities
 */
class GenerateComplexTypeClasses extends AbstractGenerate
{
    protected $simpleTypeMap = [
        'string' => 'string',
        'int' => 'int',
        'integer' => 'int',
        'datetime' => 'string',
        'boolean' => 'boolean',
        'nonnegativeinteger' => 'int',
        'positiveinteger' => 'int',
        'date' => 'string',
        'decimal' => 'float',
        'double' => 'float',
        'base64binary' => 'string',
        'time' => 'string',
        'duration' => 'string'
    ];

    /**
     * Run generator
     */
    public function run()
    {
        foreach ($this->xml->types->schema->children() as $schema) {
            if ('complexType' == $schema->getName()) {
                $attributes = $schema->attributes();
                //class name
                $className = $attributes['name'];
                //class documentation
                $classDoc = $schema->annotation->documentation;

                $properties = array();

                foreach ($schema->sequence->element as $element) {
                    $property = array();
                    $property['name'] = (string)$element['name'];
                    $property['type'] = (string)str_replace('ns:', '', $element['type']);
                    $property['doc'] = (string)$element->annotation->documentation;

                    if (isset($element['maxOccurs'])) {
                        $property['maxOccurs'] = (string)$element['maxOccurs'];
                    } else {
                        $property['maxOccurs'] = null;
                    }

                    if (isset($element['minOccurs'])) {
                        $property['minOccurs'] = (string)$element['minOccurs'];
                    } else {
                        $property['minOccurs'] = null;
                    }

                    //TODO set defaults for element with a "fixed" attribute

                    $properties[] = $property;

                }

                $classFilePath = $this->exportPath . \DIRECTORY_SEPARATOR . $className . '.php';

                echo "Writing File: {$classFilePath}\n";

                $fh = fopen($classFilePath, 'w');

                $fileBody = $this->getGeneratedFileBody($className, $classDoc, $properties);

                fwrite($fh, $fileBody);

                fclose($fh);

            }
        }
    }

    /**
     * Generates the body of the class file
     *
     * @param string $className Name of class
     * @param string $classDoc Documentation for class
     * @param array $properties Properties
     * @return string Generated code
     */
    protected function getGeneratedFileBody($className, $classDoc, array $properties)
    {
        if (empty($classDoc)) {
            $classDoc = $className;
        }

        $classDoc = str_ireplace("\t", '', $classDoc);
        $classDoc = trim($classDoc);

        $propertiesString = '';
        $methodString = '';

        foreach ($properties as $property) {
            $propertiesString .= $this->getGeneratedClassProperty($property);
            $methodString .= $this->getGeneratedSetMethod($property) . "\n";
        }

        $methodString = rtrim($methodString);

        $fileBody = <<<TEXT
<?php
namespace {$this->namespace}\ComplexType;

use FedEx\AbstractComplexType;

/**
 * $classDoc
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  {$this->subPackageName}
 *
{$propertiesString}
 */
class $className extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected \$name = '$className';

$methodString
}

TEXT;

        return $fileBody;
    }

    /**
     * Creates the set method for a particular type
     *
     * @param string $className Class name
     * @param array $property Properties
     * @return string Generated set method
     */
    protected function getGeneratedSetMethod(array $property)
    {
        $simpleTypeNamespace = "\\{$this->namespace}\\SimpleType\\";

        $varName = lcfirst($property['name']);

        $property['typePHPDoc'] = $property['type'];
        $isArray = false;

        if ($property['maxOccurs'] > 1 || $property['maxOccurs'] == 'unbounded') {
            $property['typePHPDoc'] = "{$property['type']}[]";
            $isArray = true;
        }

        //set property type if is simple type
        if ($this->isSimpleType($property['type'])) {
            if ($isArray) {
                $property['typePHPDoc'] = $simpleTypeNamespace . $property['type'] . '[]|string[]';
                $property['type'] = 'array ';
            } else {
                $property['typePHPDoc'] = $simpleTypeNamespace . $property['type'] . '|string';
                $property['type'] = null;
            }

        } else {
            //check for invalid types for parameter type hints
            if (array_key_exists(strtolower($property['type']), $this->simpleTypeMap)) {
                $property['typePHPDoc'] = $this->simpleTypeMap[strtolower($property['type'])];
                $property['type'] = '';
            } else {
                if ($isArray) {
                    $property['type'] = 'array ';
                } elseif (!empty($property['type'])) {
                    $property['type'] = $property['type'] . ' ';
                }
            }
        }

        if (empty($property['doc'])) {
            $property['doc'] = "Set {$property['name']}";
        }

        $property['doc'] = str_ireplace("\t", '', $property['doc']);
        $property['doc'] = trim($property['doc']);

        $returnString = <<<TEXT
    /**
     * {$property['doc']}
     *
     * @param {$property['typePHPDoc']} \${$varName}
     * @return \$this
     */
    public function set{$property['name']}({$property['type']}\${$varName})
    {
        \$this->values['{$property['name']}'] = \${$varName};
        return \$this;
    }

TEXT;

        return $returnString;
    }

    public function getGeneratedClassProperty(array $property)
    {
        $typePHPDoc = $property['type'];

        $simpleTypeNamespace = "\\{$this->namespace}\\SimpleType\\";
        if ($this->isSimpleType($property['type'])) {
            $typePHPDoc = $simpleTypeNamespace . $property['type'] . '|string';
        } else {
            if (array_key_exists(strtolower($property['type']), $this->simpleTypeMap)) {
                $typePHPDoc = $this->simpleTypeMap[strtolower($property['type'])];
                $property['type'] = '';
            } else {
                $property['type'] = $property['type'] . ' ';
            }
        }

        if ($property['maxOccurs'] > 1 || $property['maxOccurs'] == 'unbounded') {
            $typePHPDoc .= "[]";
        }

        return " * @property {$typePHPDoc} \${$property['name']}\n";
    }

    /**
     * Checks to see if a particular class exists as a SimpleType
     *
     * @param string $propertyType Property type
     * @return boolean
     */
    protected function isSimpleType($propertyType)
    {
        $simpleTypeDir = realpath($this->exportPath . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'SimpleType');

        $classPath = $simpleTypeDir . \DIRECTORY_SEPARATOR . $propertyType . '.php';

        return file_exists($classPath);
    }
}
