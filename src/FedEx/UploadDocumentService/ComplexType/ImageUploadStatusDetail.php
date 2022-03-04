<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ImageUploadStatusDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\ImageId|string $Id
 * @property \FedEx\UploadDocumentService\SimpleType\UploadImageStatusType|string $Status
 * @property \FedEx\UploadDocumentService\SimpleType\UploadImageStatusInfoType|string $StatusInfo
 * @property string $Message

 */
class ImageUploadStatusDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ImageUploadStatusDetail';

    /**
     * Set Id
     *
     * @param \FedEx\UploadDocumentService\SimpleType\ImageId|string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Set Status
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadImageStatusType|string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->values['Status'] = $status;
        return $this;
    }

    /**
     * Set StatusInfo
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadImageStatusInfoType|string $statusInfo
     * @return $this
     */
    public function setStatusInfo($statusInfo)
    {
        $this->values['StatusInfo'] = $statusInfo;
        return $this;
    }

    /**
     * Set Message
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->values['Message'] = $message;
        return $this;
    }
}
