<?php
namespace FedEx\Utility\CodeGenerator;

/**
 * Abstract class for code generation utilities
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Utilities
 */
abstract class AbstractGenerate
{
    /**
     * SimpleXMLElement
     *
     * @var SimpleXMLElement
     */
    protected $xml;

    /**
     * Path to WSDL file
     *
     * @var string
     */
    protected $wsdlPath;

    /**
     * Export path
     *
     * @var string
     */
    protected $exportPath;

    /**
     * Namespace name
     *
     * @var string
     */
    protected $namespace;

    /**
     * Subpackage name
     *
     * @var string
     */
    protected $subPackageName;

    /**
     * Base namespace
     *
     * @var string
     */
    protected $baseNamespace;

    /**
     * Constructor
     *
     * @param string $exportPath Path to export ComplexType classes
     * @param string $wsdlPath Path to .wsdl file
     * @param string $namespace base Namespace name (eg: FedEx\RateService).
     * @param string $subPackageName Sub package the generated class belongs to (used in DocBlock)
     * @throws \Exception
     */
    public function __construct($exportPath, $wsdlPath, $namespace, $subPackageName)
    {
        if (file_exists($wsdlPath)) {
            $this->wsdlPath = $wsdlPath;
        } else {
            throw new Exception('path to wsdl file is invalid');
        }

        if (is_writable($exportPath)) {
            $this->exportPath = $exportPath;
        } else {
            throw new Exception('cannot write to export path');
        }

        $this->namespace = $namespace;
        $this->subPackageName = $subPackageName;
        $this->_loadXML();
    }

    /**
     * Parses the xml file as a SimpleXMLElement
     *
     */
    protected function _loadXML()
    {
        $fileContents = file_get_contents($this->wsdlPath);
        $fileContents = str_replace('xs:', '', $fileContents);
        $this->xml = new \SimpleXMLElement($fileContents);
    }

    /**
     * Run Generator
     */
    abstract public function run();

    /**
     * Returns the relative path between 2 directories
     *
     * @param string $from From directory path
     * @param string $to To directory path
     * @return string Relative directory path
     */
    public function getRelativePath($from, $to)
    {
        $from = explode('/', $from);
        $to = explode('/', $to);
        $relPath = $to;

        foreach ($from as $depth => $dir) {
            // find first non-matching dir
            if ($dir === $to[$depth]) {
                // ignore this directory
                array_shift($relPath);
            } else {
                // get number of remaining dirs to $from
                $remaining = count($from) - $depth;
                if ($remaining > 1) {
                    // add traversals up to first matching dir
                    $padLength = (count($relPath) + $remaining - 1) * -1;
                    $relPath = array_pad($relPath, $padLength, '..');
                    break;
                } else {
                    $relPath[0] = './' . $relPath[0];
                }
            }
        }
        return implode('/', $relPath);
    }
}
