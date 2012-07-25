<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Electronic Trade document references used with the ETD special service.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EtdDetail
    extends AbstractComplexType
{
    protected $_name = 'EtdDetail';

    /**
     * Specifies client's intent for whether all documents must be confirmed before shipment processing.
     *
     * @param EtdConfirmationType $Confirmation
     * return EtdDetail
     */
    public function setConfirmation(\FedEx\PickupService\SimpleType\EtdConfirmationType $confirmation)
    {
        $this->Confirmation = $confirmation;
        return $this;
    }
    
    /**
     * Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     *
     * @param array[RequestedShippingDocumentType] $RequestedDocumentCopies
     * return EtdDetail
     */
    public function setRequestedDocumentCopies(array $requestedDocumentCopies)
    {
        $this->RequestedDocumentCopies = $requestedDocumentCopies;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[UploadDocumentDetail] $Documents
     * return EtdDetail
     */
    public function setDocuments(array $documents)
    {
        $this->Documents = $documents;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[UploadDocumentReferenceDetail] $DocumentReferences
     * return EtdDetail
     */
    public function setDocumentReferences(array $documentReferences)
    {
        $this->DocumentReferences = $documentReferences;
        return $this;
    }
    

    
}