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
     * @return UploadDocumentStatusDetail
     */
    public function setLineNumber($lineNumber)
    {
        $this->LineNumber = $lineNumber;
        return $this;
    }
    
    /**
     * Returns Set LineNumber
     *
     * @return nonNegativeInteger
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
    
    /**
     * Set CustomerReference
     *
     * @param string $customerReference
     * @return UploadDocumentStatusDetail
     */
    public function setCustomerReference($customerReference)
    {
        $this->CustomerReference = $customerReference;
        return $this;
    }
    
    /**
     * Returns Set CustomerReference
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->CustomerReference;
    }
    
    /**
     * Set DocumentProducer
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentProducerType|string $documentProducer
     * @return UploadDocumentStatusDetail
     */
    public function setDocumentProducer($documentProducer)
    {
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    
    /**
     * Returns Set DocumentProducer
     *
     * @return \FedEx\UploadDocumentService\SimpleType\UploadDocumentProducerType|string
     */
    public function getDocumentProducer()
    {
        return $this->DocumentProducer;
    }
    
    /**
     * Set DocumentType
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentType|string $documentType
     * @return UploadDocumentStatusDetail
     */
    public function setDocumentType($documentType)
    {
        $this->DocumentType = $documentType;
        return $this;
    }
    
    /**
     * Returns Set DocumentType
     *
     * @return \FedEx\UploadDocumentService\SimpleType\UploadDocumentType|string
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }
    
    /**
     * Set FileName
     *
     * @param string $fileName
     * @return UploadDocumentStatusDetail
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;
        return $this;
    }
    
    /**
     * Returns Set FileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    
    /**
     * Set Status
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusType|string $status
     * @return UploadDocumentStatusDetail
     */
    public function setStatus($status)
    {
        $this->Status = $status;
        return $this;
    }
    
    /**
     * Returns Set Status
     *
     * @return \FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusType|string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    
    /**
     * Distinct value for reason status was assigned.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusInfoType|string $statusInfo
     * @return UploadDocumentStatusDetail
     */
    public function setStatusInfo($statusInfo)
    {
        $this->StatusInfo = $statusInfo;
        return $this;
    }
    
    /**
     * Returns Distinct value for reason status was assigned.
     *
     * @return \FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusInfoType|string
     */
    public function getStatusInfo()
    {
        return $this->StatusInfo;
    }
    
    /**
     * Human-readable explanation of document status.
     *
     * @param string $message
     * @return UploadDocumentStatusDetail
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * Returns Human-readable explanation of document status.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }
    
    /**
     * Set DocumentId
     *
     * @param string $documentId
     * @return UploadDocumentStatusDetail
     */
    public function setDocumentId($documentId)
    {
        $this->DocumentId = $documentId;
        return $this;
    }
    
    /**
     * Returns Set DocumentId
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }
    
    /**
     * Set DocumentIdProducer
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentIdProducer|string $documentIdProducer
     * @return UploadDocumentStatusDetail
     */
    public function setDocumentIdProducer($documentIdProducer)
    {
        $this->DocumentIdProducer = $documentIdProducer;
        return $this;
    }
    
    /**
     * Returns Set DocumentIdProducer
     *
     * @return \FedEx\UploadDocumentService\SimpleType\UploadDocumentIdProducer|string
     */
    public function getDocumentIdProducer()
    {
        return $this->DocumentIdProducer;
    }
    

    
}