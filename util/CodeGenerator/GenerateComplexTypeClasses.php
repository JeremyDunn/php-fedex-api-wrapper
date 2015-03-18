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
     * Path to WSDL file
     * 
     * @var string
     */
    protected $_wsdlPath;

    /**
     * Export Path
     * 
     * @var string
     */
    protected $_exportPath;

    /**
     * Base namespace
     * 
     * @var string
     */
    protected $_baseNamespace;

    /**
     * Sub Package name
     * 
     * @var string
     */
    protected $_subPackageName;

    /**
     * Constructor
     *
     * @param string $exportPath Path to export ComplexType classes
     * @param string $wsdlPath Path to .wsdl file
     * @param string $baseNamespace base Namespace name (eg: FedEx\RateService).
     * @param string $subPackageName Sub package the generated class belongs to (used in DocBlock)
     */
    public function __construct($exportPath, $wsdlPath, $baseNamespace, $subPackageName)
    {
        if (file_exists($wsdlPath)) {
            $this->_wsdlPath = $wsdlPath;
        } else {
            throw new \Exception('path to wsdl file is invalid');
        }

        if (is_writable($exportPath)){
            $this->_exportPath = $exportPath;
        } else {
            throw new \Exception('cannot write to export path');
        }

        $this->_baseNamespace = $baseNamespace;

        $this->_subPackageName = $subPackageName;

        $this->_loadXML();
    }

    /**
     * Run generator
     */
    public function run()
    {
        foreach ($this->_xml->types->schema->children() as $schema) {
            if ('complexType' == $schema->getName()) {
                
                $attributes = $schema->attributes();
                //class name
                $className = $attributes['name'];
                //class documentation
                $classDoc = $schema->annotation->documentation;
                
                $properties = array();

                foreach ($schema->sequence->element as $element) {
                    $property = array();
                    $property['name'] = (string) $element['name'];
                    $property['type'] = (string) str_replace('ns:', '', $element['type']);
                    $property['doc'] = (string) $element->annotation->documentation;
                    
                    if (isset($element['maxOccurs'])) {
                        $property['maxOccurs'] = (string) $element['maxOccurs'];
                    } else {
                        $property['maxOccurs'] = null;
                    }

                    if (isset($element['minOccurs'])) {
                        $property['minOccurs'] = (string) $element['minOccurs'];
                    } else {
                        $property['minOccurs'] = null;
                    }

                    $properties[] = $property;

                }

                $classFilePath = $this->_exportPath . \DIRECTORY_SEPARATOR . $className . '.php';
                
                echo "Writing File: {$classFilePath}\n";

                $fh = fopen($classFilePath, 'w');

                $fileBody = $this->_getGeneratedFileBody($className, $classDoc, $properties);

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
    protected function _getGeneratedFileBody($className, $classDoc, array $properties)
    {
        if (empty($classDoc)) {
            $classDoc = $className;
        }
        
        $propertiesString = '';
        $methodString = '';

        foreach ($properties as $property) {
            //$propertiesString .= " * @property {$property['type']} \${$property['name']} {$property['doc']}\n";
            $methodString .= $this->_getGeneratedSetMethod($className, $property) . "\n";
        }
        
        $fileBody = <<<TEXT
<?php
namespace {$this->_baseNamespace}\ComplexType;

use FedEx\AbstractComplexType;

/**
 * $classDoc
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  {$this->_subPackageName}
 */
class $className
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected \$_name = '$className';

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
    protected function _getGeneratedSetMethod($className, array $property)
    {
        $invalidTypes = array('string', 'int', 'dateTime', 'boolean', 'nonNegativeInteger', 'positiveInteger', 'date', 'weight', 'decimal', 'double', 'base64Binary');

        $simpleTypeNamespace = "\\{$this->_baseNamespace}\\SimpleType\\";

        $varName = lcfirst($property['name']);

        $property['typePHPDoc'] = $property['type'];

        if ($property['maxOccurs'] > 1 || $property['maxOccurs'] == 'unbounded') {
            $property['typePHPDoc'] = "{$property['type']}[]";
            $property['type'] = 'array';
        }

        //set property type if is simple type
        if ($this->_isSimpleType($property['type'])) {        
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
     * @return $className
     */
    public function set{$property['name']}({$property['type']}\${$varName})
    {
        \$this->{$property['name']} = \${$varName};
        return \$this;
    }
    
    /**
     * Returns {$property['doc']}
     *
     * @return {$property['typePHPDoc']}
     */
    public function get{$property['name']}()
    {
        return \$this->{$property['name']};
    }
    
TEXT;

        return $returnString;
    }

    /**
     * Checks to see if a particular class exists as a SimpleType
     * 
     * @param string $propertyType Property type
     * @return boolean
     */
    protected function _isSimpleType($propertyType)
    {
        $simpleTypeDir = realpath($this->_exportPath . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'SimpleType');

        $classPath = $simpleTypeDir . \DIRECTORY_SEPARATOR .  $propertyType . '.php';

        return file_exists($classPath);
    }
      

}
