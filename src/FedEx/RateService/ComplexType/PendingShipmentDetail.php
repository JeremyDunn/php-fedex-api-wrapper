<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This information describes the kind of pending shipment being requested.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\PendingShipmentType|string $Type
 * @property string $ExpirationDate
 * @property PendingShipmentProcessingOptionsRequested $ProcessingOptions
 * @property RecommendedDocumentSpecification $RecommendedDocumentSpecification

 */
class PendingShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PendingShipmentDetail';

    /**
     * Set Type
     *
     * @param \FedEx\RateService\SimpleType\PendingShipmentType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Date after which the pending shipment will no longer be available for completion.
     *
     * @param string $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->values['ExpirationDate'] = $expirationDate;
        return $this;
    }

    /**
     * Set ProcessingOptions
     *
     * @param PendingShipmentProcessingOptionsRequested $processingOptions
     * @return $this
     */
    public function setProcessingOptions(PendingShipmentProcessingOptionsRequested $processingOptions)
    {
        $this->values['ProcessingOptions'] = $processingOptions;
        return $this;
    }

    /**
     * These are documents that are recommended to be included with the shipment.
     *
     * @param RecommendedDocumentSpecification $recommendedDocumentSpecification
     * @return $this
     */
    public function setRecommendedDocumentSpecification(RecommendedDocumentSpecification $recommendedDocumentSpecification)
    {
        $this->values['RecommendedDocumentSpecification'] = $recommendedDocumentSpecification;
        return $this;
    }
}
