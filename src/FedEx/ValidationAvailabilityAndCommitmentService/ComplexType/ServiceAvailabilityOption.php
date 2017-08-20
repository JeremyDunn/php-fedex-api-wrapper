<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ServiceAvailabilityOption
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ServiceType|string $Service
 * @property string $DeliveryDate
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\DayOfWeekType|string $DeliveryDay
 * @property string $DestinationStationId
 * @property string $DestinationAirportId
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\TransitTimeType|string $TransitTime

 */
class ServiceAvailabilityOption extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ServiceAvailabilityOption';

    /**
     * Set Service
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ServiceType|string $service
     * @return $this
     */
    public function setService($service)
    {
        $this->values['Service'] = $service;
        return $this;
    }

    /**
     * Set DeliveryDate
     *
     * @param string $deliveryDate
     * @return $this
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->values['DeliveryDate'] = $deliveryDate;
        return $this;
    }

    /**
     * Set DeliveryDay
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\DayOfWeekType|string $deliveryDay
     * @return $this
     */
    public function setDeliveryDay($deliveryDay)
    {
        $this->values['DeliveryDay'] = $deliveryDay;
        return $this;
    }

    /**
     * Set DestinationStationId
     *
     * @param string $destinationStationId
     * @return $this
     */
    public function setDestinationStationId($destinationStationId)
    {
        $this->values['DestinationStationId'] = $destinationStationId;
        return $this;
    }

    /**
     * Set DestinationAirportId
     *
     * @param string $destinationAirportId
     * @return $this
     */
    public function setDestinationAirportId($destinationAirportId)
    {
        $this->values['DestinationAirportId'] = $destinationAirportId;
        return $this;
    }

    /**
     * Specifies the commit time for a FedEx Ground shipment.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\TransitTimeType|string $transitTime
     * @return $this
     */
    public function setTransitTime($transitTime)
    {
        $this->values['TransitTime'] = $transitTime;
        return $this;
    }
}
