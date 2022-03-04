<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentStatusDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property int $LineNumber
 * @property string $CustomerReference
 * @property \FedEx\UploadDocumentService\SimpleType\UploadDocumentProducerType|string $DocumentProducer
 * @property \FedEx\UploadDocumentService\SimpleType\UploadDocumentType|string $DocumentType
 * @property string $FileName
 * @property \FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusType|string $Status
 * @property \FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusInfoType|string $StatusInfo
 * @property string $Message
 * @property string $DocumentId
 * @property \FedEx\UploadDocumentService\SimpleType\UploadDocumentIdProducer|string $DocumentIdProducer

 */
class UploadDocumentStatusDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadDocumentStatusDetail';

    /**
     * Set LineNumber
     *
     * @param int $lineNumber
     * @return $this
     */
    public function setLineNumber($lineNumber)
    {
        $this->values['LineNumber'] = $lineNumber;
        return $this;
    }

    /**
     * Set CustomerReference
     *
     * @param string $customerReference
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->values['CustomerReference'] = $customerReference;
        return $this;
    }

    /**
     * Set DocumentProducer
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentProducerType|string $documentProducer
     * @return $this
     */
    public function setDocumentProducer($documentProducer)
    {
        $this->values['DocumentProducer'] = $documentProducer;
        return $this;
    }

    /**
     * Set DocumentType
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentType|string $documentType
     * @return $this
     */
    public function setDocumentType($documentType)
    {
        $this->values['DocumentType'] = $documentType;
        return $this;
    }

    /**
     * Set FileName
     *
     * @param string $fileName
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->values['FileName'] = $fileName;
        return $this;
    }

    /**
     * Set Status
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusType|string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->values['Status'] = $status;
        return $this;
    }

    /**
     * Distinct value for reason status was assigned.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusInfoType|string $statusInfo
     * @return $this
     */
    public function setStatusInfo($statusInfo)
    {
        $this->values['StatusInfo'] = $statusInfo;
        return $this;
    }

    /**
     * Human-readable explanation of document status.
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->values['Message'] = $message;
        return $this;
    }

    /**
     * Set DocumentId
     *
     * @param string $documentId
     * @return $this
     */
    public function setDocumentId($documentId)
    {
        $this->values['DocumentId'] = $documentId;
        return $this;
    }

    /**
     * Set DocumentIdProducer
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentIdProducer|string $documentIdProducer
     * @return $this
     */
    public function setDocumentIdProducer($documentIdProducer)
    {
        $this->values['DocumentIdProducer'] = $documentIdProducer;
        return $this;
    }
}
