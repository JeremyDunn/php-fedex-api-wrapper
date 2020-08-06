<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Electronic Trade document references used with the ETD special service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\EtdConfirmationType|string $Confirmation
 * @property \FedEx\ShipService\SimpleType\EtdAttributeType|string[] $Attributes
 * @property \FedEx\ShipService\SimpleType\RequestedShippingDocumentType|string[] $RequestedDocumentCopies
 * @property UploadDocumentReferenceDetail[] $DocumentReferences

 */
class EtdDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdDetail';

    /**
     * Specifies client's intent for whether all documents must be confirmed before shipment processing.
     *
     * @param \FedEx\ShipService\SimpleType\EtdConfirmationType|string $confirmation
     * @return $this
     */
    public function setConfirmation($confirmation)
    {
        $this->values['Confirmation'] = $confirmation;
        return $this;
    }

    /**
     * Set Attributes
     *
     * @param \FedEx\ShipService\SimpleType\EtdAttributeType[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     *
     * @param \FedEx\ShipService\SimpleType\RequestedShippingDocumentType[]|string[] $requestedDocumentCopies
     * @return $this
     */
    public function setRequestedDocumentCopies(array $requestedDocumentCopies)
    {
        $this->values['RequestedDocumentCopies'] = $requestedDocumentCopies;
        return $this;
    }

    /**
     * Set DocumentReferences
     *
     * @param UploadDocumentReferenceDetail[] $documentReferences
     * @return $this
     */
    public function setDocumentReferences(array $documentReferences)
    {
        $this->values['DocumentReferences'] = $documentReferences;
        return $this;
    }
}
