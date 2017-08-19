<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Contains role and completed shipment data for shipments produced while confirming a consolidation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\ConsolidationShipmentRoleType|string $ShipmentRoleType
 * @property RequestedShipment $RequestedShipment
 * @property CompletedShipmentDetail $CompletedShipmentDetail

 */
class ConsolidationShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ConsolidationShipment';

    /**
     * Indicates the role of this shipment in the consolidation.
     *
     * @param \FedEx\OpenShipService\SimpleType\ConsolidationShipmentRoleType|string $shipmentRoleType
     * @return $this
     */
    public function setShipmentRoleType($shipmentRoleType)
    {
        $this->values['ShipmentRoleType'] = $shipmentRoleType;
        return $this;
    }

    /**
     * Contains requested shipment data for a single shipment role in the consolidation.
     *
     * @param RequestedShipment $requestedShipment
     * @return $this
     */
    public function setRequestedShipment(RequestedShipment $requestedShipment)
    {
        $this->values['RequestedShipment'] = $requestedShipment;
        return $this;
    }

    /**
     * Contains completed shipment data for a single shipment role in the consolidation.
     *
     * @param CompletedShipmentDetail $completedShipmentDetail
     * @return $this
     */
    public function setCompletedShipmentDetail(CompletedShipmentDetail $completedShipmentDetail)
    {
        $this->values['CompletedShipmentDetail'] = $completedShipmentDetail;
        return $this;
    }
}
