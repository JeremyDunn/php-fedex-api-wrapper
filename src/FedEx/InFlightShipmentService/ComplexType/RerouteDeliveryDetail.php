<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about rerouting a shipment for delivery.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property \FedEx\InFlightShipmentService\SimpleType\RerouteDeliveryType|string $Type
 * @property \FedEx\InFlightShipmentService\SimpleType\TransitTimeType|string $TransitTime
 * @property string $CommitmentDate
 * @property string $CommitmentTime

 */
class RerouteDeliveryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RerouteDeliveryDetail';

    /**
     * Specifies the reroute option.
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\RerouteDeliveryType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Specifies the commit time for a FedEx Ground shipment that is being rerouted.
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\TransitTimeType|string $transitTime
     * @return $this
     */
    public function setTransitTime($transitTime)
    {
        $this->values['TransitTime'] = $transitTime;
        return $this;
    }

    /**
     * Specifies the commit date for a FedEx Express shipment that is being rereouted.
     *
     * @param string $commitmentDate
     * @return $this
     */
    public function setCommitmentDate($commitmentDate)
    {
        $this->values['CommitmentDate'] = $commitmentDate;
        return $this;
    }

    /**
     * Specifies the commit time in local time of the destination for a FedEx Express shipment that is being rerouted.
     *
     * @param string $commitmentTime
     * @return $this
     */
    public function setCommitmentTime($commitmentTime)
    {
        $this->values['CommitmentTime'] = $commitmentTime;
        return $this;
    }
}
