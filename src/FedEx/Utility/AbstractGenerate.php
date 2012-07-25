<?php
namespace Fedex\Utility;

abstract class AbstractGenerate
{
    /**
     * @var SimpleXMLElement
     */
    protected $_xml;
    
    protected function _loadXML()
    {
        $fileContents = file_get_contents($this->_wsdlPath);
        $fileContents = str_replace('xs:', '', $fileContents);
        $this->_xml = new \SimpleXMLElement($fileContents);
    }
    
    abstract public function run();
    
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