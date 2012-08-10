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
     * return EtdDetail
     */
    public function setConfirmation($confirmation)
    {
        $this->Confirmation = $confirmation;
        return $this;
    }
    
    /**
     * Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     *
     * @param RequestedShippingDocumentType[] $requestedDocumentCopies
     * return EtdDetail
     */
    public function setRequestedDocumentCopies(array $requestedDocumentCopies)
    {
        $this->RequestedDocumentCopies = $requestedDocumentCopies;
        return $this;
    }
    
    /**
     * Set Documents
     *
     * @param UploadDocumentDetail[] $documents
     * return EtdDetail
     */
    public function setDocuments(array $documents)
    {
        $this->Documents = $documents;
        return $this;
    }
    
    /**
     * Set DocumentReferences
     *
     * @param UploadDocumentReferenceDetail[] $documentReferences
     * return EtdDetail
     */
    public function setDocumentReferences(array $documentReferences)
    {
        $this->DocumentReferences = $documentReferences;
        return $this;
    }
    

    
}