<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the characteristics of the containing RequestedShipment that define its participation in a consolidation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $RelationshipTimestamp
 * @property \FedEx\OpenShipService\SimpleType\ConsolidationType|string $Type
 * @property \FedEx\OpenShipService\SimpleType\ConsolidationShipmentRoleType|string $Role
 * @property AssociatedTrackingId[] $AssociatedTrackingIds
 * @property ConsolidationSpecialServicesRequested $SpecialServicesRequested
 * @property ShipmentInternationalDistributionDetail $InternationalDistributionDetail
 * @property ShipmentTransborderDistributionDetail $TransborderDistributionDetail
 * @property RequestedDistributionLocation[] $DistributionLocations

 */
class ShipmentConsolidationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentConsolidationDetail';

    /**
     * The time at which this shipment was associated with the consolidation.
     *
     * @param string $relationshipTimestamp
     * @return $this
     */
    public function setRelationshipTimestamp($relationshipTimestamp)
    {
        $this->values['RelationshipTimestamp'] = $relationshipTimestamp;
        return $this;
    }

    /**
     * The type of consolidation that contains this shipment.
     *
     * @param \FedEx\OpenShipService\SimpleType\ConsolidationType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * The role this shipment plays within the consolidation.
     *
     * @param \FedEx\OpenShipService\SimpleType\ConsolidationShipmentRoleType|string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->values['Role'] = $role;
        return $this;
    }

    /**
     * Identifies other tracking IDs related to this shipment within the same consolidation.
     *
     * @param AssociatedTrackingId[] $associatedTrackingIds
     * @return $this
     */
    public function setAssociatedTrackingIds(array $associatedTrackingIds)
    {
        $this->values['AssociatedTrackingIds'] = $associatedTrackingIds;
        return $this;
    }

    /**
     * Specifies the consolidation-level special services to be performed for this shipment.
     *
     * @param ConsolidationSpecialServicesRequested $specialServicesRequested
     * @return $this
     */
    public function setSpecialServicesRequested(ConsolidationSpecialServicesRequested $specialServicesRequested)
    {
        $this->values['SpecialServicesRequested'] = $specialServicesRequested;
        return $this;
    }

    /**
     * Specifies attributes of a shipment within an international distribution.
     *
     * @param ShipmentInternationalDistributionDetail $internationalDistributionDetail
     * @return $this
     */
    public function setInternationalDistributionDetail(ShipmentInternationalDistributionDetail $internationalDistributionDetail)
    {
        $this->values['InternationalDistributionDetail'] = $internationalDistributionDetail;
        return $this;
    }

    /**
     * Specifies attributes of a shipment within a transborder distribution.
     *
     * @param ShipmentTransborderDistributionDetail $transborderDistributionDetail
     * @return $this
     */
    public function setTransborderDistributionDetail(ShipmentTransborderDistributionDetail $transborderDistributionDetail)
    {
        $this->values['TransborderDistributionDetail'] = $transborderDistributionDetail;
        return $this;
    }

    /**
     * FOR INTERNAL FEDEX USE ONLY: Identifies the distribution facility where this shipment will be de-consolidated and distributed.
     *
     * @param RequestedDistributionLocation[] $distributionLocations
     * @return $this
     */
    public function setDistributionLocations(array $distributionLocations)
    {
        $this->values['DistributionLocations'] = $distributionLocations;
        return $this;
    }
}
