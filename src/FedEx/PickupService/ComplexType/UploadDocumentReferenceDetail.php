<?php
namespace FedEx\PickupService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
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
    public function setDocumentProducer(\FedEx\PickupService\SimpleType\UploadDocumentProducerType $documentProducer)
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
    public function setDocumentType(\FedEx\PickupService\SimpleType\UploadDocumentType $documentType)
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
    public function setDocumentIdProducer(\FedEx\PickupService\SimpleType\UploadDocumentIdProducer $documentIdProducer)
    {
        $this->DocumentIdProducer = $documentIdProducer;
        return $this;
    }
    

    
}