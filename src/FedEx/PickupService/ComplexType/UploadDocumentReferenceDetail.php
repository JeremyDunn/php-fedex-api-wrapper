<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentReferenceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class UploadDocumentReferenceDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'UploadDocumentReferenceDetail';

    /**
     * Set LineNumber
     *
     * @param nonNegativeInteger $lineNumber
     * @return UploadDocumentReferenceDetail
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
     * @return UploadDocumentReferenceDetail
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
     * @param \FedEx\Pickup\SimpleType\UploadDocumentProducerType|string $documentProducer
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentProducer($documentProducer)
    {
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    
    /**
     * Returns Set DocumentProducer
     *
     * @return \FedEx\Pickup\SimpleType\UploadDocumentProducerType|string
     */
    public function getDocumentProducer()
    {
        return $this->DocumentProducer;
    }
    
    /**
     * Set DocumentType
     *
     * @param \FedEx\Pickup\SimpleType\UploadDocumentType|string $documentType
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentType($documentType)
    {
        $this->DocumentType = $documentType;
        return $this;
    }
    
    /**
     * Returns Set DocumentType
     *
     * @return \FedEx\Pickup\SimpleType\UploadDocumentType|string
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }
    
    /**
     * Set DocumentId
     *
     * @param string $documentId
     * @return UploadDocumentReferenceDetail
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
     * @param \FedEx\Pickup\SimpleType\UploadDocumentIdProducer|string $documentIdProducer
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentIdProducer($documentIdProducer)
    {
        $this->DocumentIdProducer = $documentIdProducer;
        return $this;
    }
    
    /**
     * Returns Set DocumentIdProducer
     *
     * @return \FedEx\Pickup\SimpleType\UploadDocumentIdProducer|string
     */
    public function getDocumentIdProducer()
    {
        return $this->DocumentIdProducer;
    }
    

    
}