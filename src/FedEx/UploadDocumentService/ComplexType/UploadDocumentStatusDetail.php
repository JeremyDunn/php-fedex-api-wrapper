<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentStatusDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadDocumentStatusDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'UploadDocumentStatusDetail';

    /**
     * Set LineNumber
     *
     * @param nonNegativeInteger $lineNumber
     * return UploadDocumentStatusDetail
     */
    public function setLineNumber($lineNumber)
    {
        $this->LineNumber = $lineNumber;
        return $this;
    }
    
    /**
     * Set CustomerReference
     *
     * @param string $customerReference
     * return UploadDocumentStatusDetail
     */
    public function setCustomerReference($customerReference)
    {
        $this->CustomerReference = $customerReference;
        return $this;
    }
    
    /**
     * Set DocumentProducer
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentProducerType|string $documentProducer
     * return UploadDocumentStatusDetail
     */
    public function setDocumentProducer($documentProducer)
    {
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    
    /**
     * Set DocumentType
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentType|string $documentType
     * return UploadDocumentStatusDetail
     */
    public function setDocumentType($documentType)
    {
        $this->DocumentType = $documentType;
        return $this;
    }
    
    /**
     * Set FileName
     *
     * @param string $fileName
     * return UploadDocumentStatusDetail
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;
        return $this;
    }
    
    /**
     * Set Status
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusType|string $status
     * return UploadDocumentStatusDetail
     */
    public function setStatus($status)
    {
        $this->Status = $status;
        return $this;
    }
    
    /**
     * Distinct value for reason status was assigned.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusInfoType|string $statusInfo
     * return UploadDocumentStatusDetail
     */
    public function setStatusInfo($statusInfo)
    {
        $this->StatusInfo = $statusInfo;
        return $this;
    }
    
    /**
     * Human-readable explanation of document status.
     *
     * @param string $message
     * return UploadDocumentStatusDetail
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * Set DocumentId
     *
     * @param string $documentId
     * return UploadDocumentStatusDetail
     */
    public function setDocumentId($documentId)
    {
        $this->DocumentId = $documentId;
        return $this;
    }
    
    /**
     * Set DocumentIdProducer
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentIdProducer|string $documentIdProducer
     * return UploadDocumentStatusDetail
     */
    public function setDocumentIdProducer($documentIdProducer)
    {
        $this->DocumentIdProducer = $documentIdProducer;
        return $this;
    }
    

    
}