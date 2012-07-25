<?php
namespace FedEx\Utility;

/**
 * Converts simple types in fedex .wsdl file to PHP Classes
 */
class GenerateSimpleTypeClasses
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
     *
     * @var string
     */
    protected $_namespace;

    /**
     * @var string
     */
    protected $_subPackageName;

    protected $_strReplace = array(
        'invalid' => array(
            '.'
        ),
        'valid' => array(
            'point'
        )
    );

    /**
     * Constructor
     *
     * @param string $exportPath
     * @param string $wsdlPath
     */
public function __construct($exportPath, $wsdlPath, $namespace, $subPackageName)
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

        $this->_namespace = $namespace;

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
            if ('simpleType' == $schema->getName()) {
                var_dump($schema);

                $documentation = $schema->annotation->documentation;

                $attributes = $schema->attributes();
                $className = $attributes['name'];
                echo "name: $className<br />";
                $consts = '';

                echo count($schema->restriction->enumeration);
                foreach($schema->restriction->enumeration as $enum) {
                    $attributes = $enum->attributes();
                    $constantName = str_replace($this->_strReplace['invalid'], $this->_strReplace['valid'], $attributes->value->__toString());
                    $consts .= "    const _{$constantName} = '{$attributes->value->__toString()}';\n";
                }

                $classFilePath = $this->_exportPath . DIRECTORY_SEPARATOR . $className . '.php';

                $fh = fopen($classFilePath, 'w');

                $fileBody = $this->_getGeneratedFileBody($documentation, $className, $consts);

                fwrite($fh, $fileBody);

                fclose($fh);

            }
        }
    }

    protected function _getGeneratedFileBody($documentation, $className, $constants)
    {
        $fileBody = <<<TEXT
<?php
namespace {$this->_namespace};

/**
 * $documentation
 *
 * @version     \$Revision\$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  {$this->_subPackageName}
 */
class $className
    extends AbstractSimpleType
{
$constants}
TEXT;

        return $fileBody;
    }

}
