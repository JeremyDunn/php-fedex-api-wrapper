<?php
namespace FedEx\CloseService\ComplexType;

/**
 * Specifies how to store shipping documents.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ShippingDocumentStorageDetail
    extends AbstractComplexType
{
    protected $_name = 'ShippingDocumentStorageDetail';

    /**
     * Provides the path to be used for STORED or DEFERRED documents.
     *
     * @param string $FilePath
     * return ShippingDocumentStorageDetail
     */
    public function setFilePath($filePath)
    {
        $this->FilePath = $filePath;
        return $this;
    }
    
    /**
     * Identifies the convention by which file names are constructed for STORED or DEFERRED documents.
     *
     * @param ShippingDocumentNamingType $FileNaming
     * return ShippingDocumentStorageDetail
     */
    public function setFileNaming(\FedEx\CloseService\SimpleType\ShippingDocumentNamingType $fileNaming)
    {
        $this->FileNaming = $fileNaming;
        return $this;
    }
    
    /**
     * Suffix to be placed at the end of the file name; required on some platforms to determine file type.
     *
     * @param string $FileSuffix
     * return ShippingDocumentStorageDetail
     */
    public function setFileSuffix($fileSuffix)
    {
        $this->FileSuffix = $fileSuffix;
        return $this;
    }
    

    
}