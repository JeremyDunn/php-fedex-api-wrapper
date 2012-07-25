<?php
namespace FedEx\CloseService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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