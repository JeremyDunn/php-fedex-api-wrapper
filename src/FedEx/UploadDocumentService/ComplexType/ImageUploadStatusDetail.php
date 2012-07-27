<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class ImageUploadStatusDetail
    extends AbstractComplexType
{
    protected $_name = 'ImageUploadStatusDetail';

    /**
     * 
     *
     * @param ImageId $Id
     * return ImageUploadStatusDetail
     */
    public function setId(\FedEx\UploadDocumentService\SimpleType\ImageId $id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadImageStatusType $Status
     * return ImageUploadStatusDetail
     */
    public function setStatus(\FedEx\UploadDocumentService\SimpleType\UploadImageStatusType $status)
    {
        $this->Status = $status;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadImageStatusInfoType $StatusInfo
     * return ImageUploadStatusDetail
     */
    public function setStatusInfo(\FedEx\UploadDocumentService\SimpleType\UploadImageStatusInfoType $statusInfo)
    {
        $this->StatusInfo = $statusInfo;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Message
     * return ImageUploadStatusDetail
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    

    
}