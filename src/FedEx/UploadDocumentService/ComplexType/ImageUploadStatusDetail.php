<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ImageUploadStatusDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class ImageUploadStatusDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ImageUploadStatusDetail';

    /**
     * Set Id
     *
     * @param \FedEx\UploadDocumentService\SimpleType\ImageId  $id
     * return ImageUploadStatusDetail
     */
    public function setId(\FedEx\UploadDocumentService\SimpleType\ImageId $id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Set Status
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadImageStatusType  $status
     * return ImageUploadStatusDetail
     */
    public function setStatus(\FedEx\UploadDocumentService\SimpleType\UploadImageStatusType $status)
    {
        $this->Status = $status;
        return $this;
    }
    
    /**
     * Set StatusInfo
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadImageStatusInfoType  $statusInfo
     * return ImageUploadStatusDetail
     */
    public function setStatusInfo(\FedEx\UploadDocumentService\SimpleType\UploadImageStatusInfoType $statusInfo)
    {
        $this->StatusInfo = $statusInfo;
        return $this;
    }
    
    /**
     * Set Message
     *
     * @param string $message
     * return ImageUploadStatusDetail
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    

    
}