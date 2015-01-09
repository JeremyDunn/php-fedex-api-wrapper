<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Electronic Trade document references used with the ETD special service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EtdDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EtdDetail';

    /**
     * Specifies client's intent for whether all documents must be confirmed before shipment processing.
     *
     * @param \FedEx\Pickup\SimpleType\EtdConfirmationType|string $confirmation
     * @return EtdDetail
     */
    public function setConfirmation($confirmation)
    {
        $this->Confirmation = $confirmation;
        return $this;
    }
    
    /**
     * Returns Specifies client's intent for whether all documents must be confirmed before shipment processing.
     *
     * @return \FedEx\Pickup\SimpleType\EtdConfirmationType|string
     */
    public function getConfirmation()
    {
        return $this->Confirmation;
    }
    
    /**
     * Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     *
     * @param RequestedShippingDocumentType[] $requestedDocumentCopies
     * @return EtdDetail
     */
    public function setRequestedDocumentCopies(array $requestedDocumentCopies)
    {
        $this->RequestedDocumentCopies = $requestedDocumentCopies;
        return $this;
    }
    
    /**
     * Returns Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     *
     * @return RequestedShippingDocumentType[]
     */
    public function getRequestedDocumentCopies()
    {
        return $this->RequestedDocumentCopies;
    }
    
    /**
     * Set Documents
     *
     * @param UploadDocumentDetail[] $documents
     * @return EtdDetail
     */
    public function setDocuments(array $documents)
    {
        $this->Documents = $documents;
        return $this;
    }
    
    /**
     * Returns Set Documents
     *
     * @return UploadDocumentDetail[]
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    
    /**
     * Set DocumentReferences
     *
     * @param UploadDocumentReferenceDetail[] $documentReferences
     * @return EtdDetail
     */
    public function setDocumentReferences(array $documentReferences)
    {
        $this->DocumentReferences = $documentReferences;
        return $this;
    }
    
    /**
     * Returns Set DocumentReferences
     *
     * @return UploadDocumentReferenceDetail[]
     */
    public function getDocumentReferences()
    {
        return $this->DocumentReferences;
    }
    

    
}