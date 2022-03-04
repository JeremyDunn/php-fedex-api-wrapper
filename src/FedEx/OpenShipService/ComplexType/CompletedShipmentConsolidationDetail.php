<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Associates a shipment within a consolidation with data about the consolidation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\ConsolidationType|string $Type
 * @property \FedEx\OpenShipService\SimpleType\ConsolidationShipmentRoleType|string $Role
 * @property CompletedTransborderDistributionDetail $CompletedTransborderDistributionDetail
 * @property AssociatedTrackingId[] $AssociatedTrackingIds

 */
class CompletedShipmentConsolidationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CompletedShipmentConsolidationDetail';

    /**
     * Identifies the type of consolidation containing this shipment.
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
     * Identifies the role of this shipment within the consolidation.
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
     * Set CompletedTransborderDistributionDetail
     *
     * @param CompletedTransborderDistributionDetail $completedTransborderDistributionDetail
     * @return $this
     */
    public function setCompletedTransborderDistributionDetail(CompletedTransborderDistributionDetail $completedTransborderDistributionDetail)
    {
        $this->values['CompletedTransborderDistributionDetail'] = $completedTransborderDistributionDetail;
        return $this;
    }

    /**
     * Identifies other tracking IDs associated with this shipment in the same consolidation.
     *
     * @param AssociatedTrackingId[] $associatedTrackingIds
     * @return $this
     */
    public function setAssociatedTrackingIds(array $associatedTrackingIds)
    {
        $this->values['AssociatedTrackingIds'] = $associatedTrackingIds;
        return $this;
    }
}
