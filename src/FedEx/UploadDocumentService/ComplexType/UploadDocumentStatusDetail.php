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
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentProducerType  $documentProducer
     * return UploadDocumentStatusDetail
     */
    public function setDocumentProducer(\FedEx\UploadDocumentService\SimpleType\UploadDocumentProducerType $documentProducer)
    {
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    
    /**
     * Set DocumentType
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentType  $documentType
     * return UploadDocumentStatusDetail
     */
    public function setDocumentType(\FedEx\UploadDocumentService\SimpleType\UploadDocumentType $documentType)
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
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusType  $status
     * return UploadDocumentStatusDetail
     */
    public function setStatus(\FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusType $status)
    {
        $this->Status = $status;
        return $this;
    }
    
    /**
     * Distinct value for reason status was assigned.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusInfoType  $statusInfo
     * return UploadDocumentStatusDetail
     */
    public function setStatusInfo(\FedEx\UploadDocumentService\SimpleType\UploadDocumentStatusInfoType $statusInfo)
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
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentIdProducer  $documentIdProducer
     * return UploadDocumentStatusDetail
     */
    public function setDocumentIdProducer(\FedEx\UploadDocumentService\SimpleType\UploadDocumentIdProducer $documentIdProducer)
    {
        $this->DocumentIdProducer = $documentIdProducer;
        return $this;
    }
    

    
}