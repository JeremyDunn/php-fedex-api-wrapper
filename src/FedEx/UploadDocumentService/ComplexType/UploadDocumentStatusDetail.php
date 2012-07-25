<?php
namespace FedEx\UploadDocumentService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadDocumentStatusDetail
    extends AbstractComplexType
{
    protected $_name = 'UploadDocumentStatusDetail';

    /**
     * 
     *
     * @param nonNegativeInteger $LineNumber
     * return UploadDocumentStatusDetail
     */
    public function setLineNumber($lineNumber)
    {
        $this->LineNumber = $lineNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CustomerReference
     * return UploadDocumentStatusDetail
     */
    public function setCustomerReference($customerReference)
    {
        $this->CustomerReference = $customerReference;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadDocumentProducerType $DocumentProducer
     * return UploadDocumentStatusDetail
     */
    public function setDocumentProducer(\FedEx\UploadDocumentService\SimpleType\UploadDocumentProducerType $documentProducer)
    {
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadDocumentType $DocumentType
     * return UploadDocumentStatusDetail
     */
    public function setDocumentType(\FedEx\UploadDocumentService\SimpleType\UploadDocumentType $documentType)
    {
        $this->DocumentType = $documentType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $FileName
     * return UploadDocumentStatusDetail
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadDocumentStatusType $Status
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
     * @param UploadDocumentStatusInfoType $StatusInfo
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
     * @param string $Message
     * return UploadDocumentStatusDetail
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DocumentId
     * return UploadDocumentStatusDetail
     */
    public function setDocumentId($documentId)
    {
        $this->DocumentId = $documentId;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadDocumentIdProducer $DocumentIdProducer
     * return UploadDocumentStatusDetail
     */
    public function setDocumentIdProducer(\FedEx\UploadDocumentService\SimpleType\UploadDocumentIdProducer $documentIdProducer)
    {
        $this->DocumentIdProducer = $documentIdProducer;
        return $this;
    }
    

    
}