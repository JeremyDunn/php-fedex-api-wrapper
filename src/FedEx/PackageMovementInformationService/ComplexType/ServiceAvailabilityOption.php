<?php
namespace FedEx\PackageMovementInformationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data which identifies an available FedEx Service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\PackageMovementInformationService\SimpleType\ServiceType|string $Service
 * @property string $DeliveryDate
 * @property \FedEx\PackageMovementInformationService\SimpleType\DayOfWeekType|string $DeliveryDay
 * @property string $DestinationStationId
 * @property string $DestinationAirportId

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
     * Identifies a FedEx Service that is available between the origin and destination provided in the request.
     *
     * @param \FedEx\PackageMovementInformationService\SimpleType\ServiceType|string $service
     * @return $this
     */
    public function setService($service)
    {
        $this->values['Service'] = $service;
        return $this;
    }

    /**
     * Identifies the delivery date of the available service.
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
     * Identifies the delivery day of week of the available service. See DayOfWeekType for valid values.
     *
     * @param \FedEx\PackageMovementInformationService\SimpleType\DayOfWeekType|string $deliveryDay
     * @return $this
     */
    public function setDeliveryDay($deliveryDay)
    {
        $this->values['DeliveryDay'] = $deliveryDay;
        return $this;
    }

    /**
     * Identifies the FedEx location identifier of the package destination.
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
     * Identification of an airport, using standard three-letter abbreviations.
     *
     * @param string $destinationAirportId
     * @return $this
     */
    public function setDestinationAirportId($destinationAirportId)
    {
        $this->values['DestinationAirportId'] = $destinationAirportId;
        return $this;
    }
}
