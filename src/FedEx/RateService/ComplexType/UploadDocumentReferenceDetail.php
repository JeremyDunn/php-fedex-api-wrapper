<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class UploadDocumentReferenceDetail
    extends AbstractComplexType
{
    protected $_name = 'UploadDocumentReferenceDetail';

    /**
     * 
     *
     * @param nonNegativeInteger $LineNumber
     * return UploadDocumentReferenceDetail
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
     * return UploadDocumentReferenceDetail
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
     * return UploadDocumentReferenceDetail
     */
    public function setDocumentProducer(\FedEx\RateService\SimpleType\UploadDocumentProducerType $documentProducer)
    {
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    
    /**
     * 
     *
     * @param UploadDocumentType $DocumentType
     * return UploadDocumentReferenceDetail
     */
    public function setDocumentType(\FedEx\RateService\SimpleType\UploadDocumentType $documentType)
    {
        $this->DocumentType = $documentType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DocumentId
     * return UploadDocumentReferenceDetail
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
     * return UploadDocumentReferenceDetail
     */
    public function setDocumentIdProducer(\FedEx\RateService\SimpleType\UploadDocumentIdProducer $documentIdProducer)
    {
        $this->DocumentIdProducer = $documentIdProducer;
        return $this;
    }
    

    
}