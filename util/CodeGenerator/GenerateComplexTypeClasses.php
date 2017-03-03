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
    /**
     * Constructor
     *
     * @param string $exportPath Path to export ComplexType classes
     * @param string $wsdlPath Path to .wsdl file
     * @param string $baseNamespace base Namespace name (eg: FedEx\RateService).
     * @param string $subPackageName Sub package the generated class belongs to (used in DocBlock)
     * @throws \Exception
     */
    public function __construct($exportPath, $wsdlPath, $baseNamespace, $subPackageName)
    {
        if (file_exists($wsdlPath)) {
            $this->wsdlPath = $wsdlPath;
        } else {
            throw new \Exception('path to wsdl file is invalid');
        }

        if (is_writable($exportPath)) {
            $this->exportPath = $exportPath;
        } else {
            throw new \Exception('cannot write to export path');
        }

        $this->baseNamespace = $baseNamespace;
        $this->subPackageName = $subPackageName;
        $this->_loadXML();
    }

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

        $propertiesString = '';
        $methodString = '';

        foreach ($properties as $property) {
            $propertiesString .= $this->getGeneratedClassProperty($property);
            $methodString .= $this->getGeneratedSetMethod($property) . "\n";
        }

        $fileBody = <<<TEXT
<?php
namespace {$this->baseNamespace}\ComplexType;

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
        $invalidTypes = array('string', 'int', 'dateTime', 'boolean', 'nonNegativeInteger', 'positiveInteger', 'date', 'weight', 'decimal', 'double', 'base64Binary');

        $simpleTypeNamespace = "\\{$this->baseNamespace}\\SimpleType\\";

        $varName = lcfirst($property['name']);

        $property['typePHPDoc'] = $property['type'];

        if ($property['maxOccurs'] > 1 || $property['maxOccurs'] == 'unbounded') {
            $property['typePHPDoc'] = "{$property['type']}[]";
            $property['type'] = 'array';
        }

        //set property type if is simple type
        if ($this->isSimpleType($property['type'])) {
            $property['typePHPDoc'] = $simpleTypeNamespace . $property['type'] . '|string';
            $property['type'] = null;
        } else {
            //check for invalid types for parameter type hints
            if (in_array($property['type'], $invalidTypes)) {
                $property['type'] = '';
            } else {
                $property['type'] = $property['type'] . ' ';
            }
        }

        if (empty($property['doc'])) {
            $property['doc'] = "Set {$property['name']}";
        }


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

        $simpleTypeNamespace = "\\{$this->baseNamespace}\\SimpleType\\";
        if ($this->isSimpleType($property['type'])) {
            $typePHPDoc = $simpleTypeNamespace . $property['type'] . '|string';
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
