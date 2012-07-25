<?php
namespace FedEx\Utility;

class GenerateComplexTypeClasses
{
    /**
     * @var string
     */
    protected $_wsdlPath;

    /**
     * @var string
     */
    protected $_exportPath;

    /**
     * @var SimpleXMLElement
     */
    protected $_xml;

    /**
     * @var string
     */
    protected $_baseNamespace;

    /**
     * @var string
     */
    protected $_subPackageName;

    /**
     * Constructor
     *
     * @param string $exportPath
     * @param string $wsdlPath
     * @param string $baseNamespace
     * @param string $subPackageName
     */
    public function __construct($exportPath, $wsdlPath, $baseNamespace, $subPackageName)
    {
        if (file_exists($wsdlPath)) {
            $this->_wsdlPath = $wsdlPath;
        } else {
            throw new Exception('path to wsdl file is invalid');
        }

        if (is_writable($exportPath)){
            $this->_exportPath = $exportPath;
        } else {
            throw new Exception('cannot write to export path');
        }

        $this->_baseNamespace = $baseNamespace;

        $this->_subPackageName = $subPackageName;

        $this->_loadXML();
    }

    protected function _loadXML()
    {
        $fileContents = file_get_contents($this->_wsdlPath);
        $fileContents = str_replace('xs:', '', $fileContents);
        $this->_xml = new \SimpleXMLElement($fileContents);
    }

    public function run()
    {
        foreach ($this->_xml->types->schema->children() as $schema) {
            if ('complexType' == $schema->getName()) {
                
                $attributes = $schema->attributes();
                //class name
                $className = $attributes['name'];
                //class documentation
                $classDoc = $schema->annotation->documentation;
                echo $className . "<br />";
                echo $classDoc . "<br />";

                $properties = array();
                //var_dump($schema->sequence->element);

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

                    echo "&nbsp;{$property['name']} --- {$property['type']}<br />";
                    echo $property['doc'];

                    var_dump($element);

                }

                $classFilePath = $this->_exportPath . \DIRECTORY_SEPARATOR . $className . '.php';

                $fh = fopen($classFilePath, 'w');

                $fileBody = $this->_getGeneratedFileBody($className, $classDoc, $properties);

                fwrite($fh, $fileBody);

                fclose($fh);

            }
        }
    }

    protected function _getGeneratedFileBody($className, $classDoc, array $properties)
    {
        $propertiesString = '';
        $methodString = '';

        foreach ($properties as $property) {
            //$propertiesString .= " * @property {$property['type']} \${$property['name']} {$property['doc']}\n";
            $methodString .= $this->_getGeneratedSetMethod($className, $property) . "\n";
        }
        
        echo $propertiesString;

        $fileBody = <<<TEXT
<?php
namespace {$this->_baseNamespace}\ComplexType;

/**
 * $classDoc
 *
 * @version     \$Revision\$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  {$this->_subPackageName}
 */
class $className
    extends AbstractComplexType
{
    protected \$_name = '$className';

$methodString
    
}
TEXT;

        return $fileBody;
    }

    protected function _getGeneratedSetMethod($className, array $property)
    {
        $invalidTypes = array('string', 'int', 'dateTime', 'boolean', 'nonNegativeInteger', 'positiveInteger', 'date', 'weight', 'decimal', 'double', 'base64Binary');

        $simpleTypeNamespace = "\\{$this->_baseNamespace}\\SimpleType\\";

        echo "PROPERTIES!!!";
        var_dump($property);

        $varName = lcfirst($property['name']);

        $property['typePHPDoc'] = $property['type'];

        if ($property['maxOccurs'] > 1 || $property['maxOccurs'] == 'unbounded') {
            $property['typePHPDoc'] = "array[{$property['type']}]";
            $property['type'] = 'array';
        }

        if ($this->_isSimpleType($property['type'])) {
            $property['type'] = $simpleTypeNamespace . $property['type'];
        }

        //check for invalid types for parameter type hints
        if (in_array($property['type'], $invalidTypes)) {
            $property['type'] = '';
        } else {
            $property['type'] = $property['type'] . ' ';
        }


        $returnString = <<<TEXT
    /**
     * {$property['doc']}
     *
     * @param {$property['typePHPDoc']} \${$property['name']}
     * return $className
     */
    public function set{$property['name']}({$property['type']}\${$varName})
    {
        \$this->{$property['name']} = \${$varName};
        return \$this;
    }
    
TEXT;

        return $returnString;
    }

    protected function _isSimpleType($propertyType)
    {
        $simpleTypeDir = realpath($this->_exportPath . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'SimpleType');

        $classPath = $simpleTypeDir . \DIRECTORY_SEPARATOR .  $propertyType . '.php';

        echo $classPath;
        return file_exists($classPath);
    }
      

}
