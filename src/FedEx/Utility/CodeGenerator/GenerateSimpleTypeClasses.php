<?php
namespace FedEx\Utility\CodeGenerator;

/**
 * Converts simple types in .wsdl file to PHP class files
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Utilities
 */
class GenerateSimpleTypeClasses extends AbstractGenerate
{
    /**
     * Path to WSDL file
     * 
     * @var string
     */
    protected $_wsdlPath;

    /**
     * Export path
     * 
     * @var string
     */
    protected $_exportPath;

    /**
     * Namespace name
     * 
     * @var string
     */
    protected $_namespace;

    /**
     * Subpackage name
     * 
     * @var string
     */
    protected $_subPackageName;

    /**
     * String replacement values
     * 
     * @var array
     */
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
     * @param string $exportPath Path to export ComplexType classes
     * @param string $wsdlPath Path to .wsdl file
     * @param string $namespace base Namespace name (eg: FedEx\RateService).
     * @param string $subPackageName Sub package the generated class belongs to (used in DocBlock)
     * @throws Exception
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

    /**
     * Run generator
     */
    public function run()
    {
        foreach ($this->_xml->types->schema->children() as $schema) {
            if ('simpleType' == $schema->getName()) {

                $documentation = $schema->annotation->documentation;

                $attributes = $schema->attributes();
                $className = $attributes['name'];
                $consts = '';
                
                foreach($schema->restriction->enumeration as $enum) {
                    $attributes = $enum->attributes();
                    $constantName = str_replace($this->_strReplace['invalid'], $this->_strReplace['valid'], $attributes->value->__toString());
                    $consts .= "    const _{$constantName} = '{$attributes->value->__toString()}';\n";
                }

                $classFilePath = $this->_exportPath . DIRECTORY_SEPARATOR . $className . '.php';

                echo "Writing File: {$classFilePath}\n";
                
                $fh = fopen($classFilePath, 'w');

                $fileBody = $this->_getGeneratedFileBody($documentation, $className, $consts);

                fwrite($fh, $fileBody);

                fclose($fh);

            }
        }
    }

    /**
     * Generates the body of the class file
     * 
     * @param string $documentation Documentation string
     * @param string $className Class Name
     * @param string $constants string of constants for class
     * @return string
     */
    protected function _getGeneratedFileBody($documentation, $className, $constants)
    {
        
        if (empty($documentation)) {
            $documentation = $className;
        }
        
        $fileBody = <<<TEXT
<?php
namespace {$this->_namespace}\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * $documentation
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
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
