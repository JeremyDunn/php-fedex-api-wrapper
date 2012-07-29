<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ManifestFile
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ManifestFile
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ManifestFile';

    /**
     * Set FileName
     *
     * @param string $fileName
     * return ManifestFile
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;
        return $this;
    }
    
    /**
     * Set File
     *
     * @param base64Binary $file
     * return ManifestFile
     */
    public function setFile($file)
    {
        $this->File = $file;
        return $this;
    }
    

    
}