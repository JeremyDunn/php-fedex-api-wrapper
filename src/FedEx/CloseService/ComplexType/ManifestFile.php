<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ManifestFile
    extends AbstractComplexType
{
    protected $_name = 'ManifestFile';

    /**
     * 
     *
     * @param string $FileName
     * return ManifestFile
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;
        return $this;
    }
    
    /**
     * 
     *
     * @param base64Binary $File
     * return ManifestFile
     */
    public function setFile($file)
    {
        $this->File = $file;
        return $this;
    }
    

    
}