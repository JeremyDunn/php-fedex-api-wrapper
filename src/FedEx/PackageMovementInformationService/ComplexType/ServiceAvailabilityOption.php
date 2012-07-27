<?php
namespace FedEx\PackageMovementInformationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data which identifies an available FedEx Service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class ServiceAvailabilityOption
    extends AbstractComplexType
{
    protected $_name = 'ServiceAvailabilityOption';

    /**
     * Identifies a FedEx Service that is available between the origin and destination provided in the request.
     *
     * @param ServiceType $Service
     * return ServiceAvailabilityOption
     */
    public function setService(\FedEx\PackageMovementInformationService\SimpleType\ServiceType $service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Identifies the delivery date of the available service.
     *
     * @param date $DeliveryDate
     * return ServiceAvailabilityOption
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    
    /**
     * Identifies the delivery day of week of the available service. See DayOfWeekType for valid values.
     *
     * @param DayOfWeekType $DeliveryDay
     * return ServiceAvailabilityOption
     */
    public function setDeliveryDay(\FedEx\PackageMovementInformationService\SimpleType\DayOfWeekType $deliveryDay)
    {
        $this->DeliveryDay = $deliveryDay;
        return $this;
    }
    
    /**
     * Identifies the FedEx location identifier of the package destination.
     *
     * @param string $DestinationStationId
     * return ServiceAvailabilityOption
     */
    public function setDestinationStationId($destinationStationId)
    {
        $this->DestinationStationId = $destinationStationId;
        return $this;
    }
    
    /**
     * Identification of an airport, using standard three-letter abbreviations.
     *
     * @param string $DestinationAirportId
     * return ServiceAvailabilityOption
     */
    public function setDestinationAirportId($destinationAirportId)
    {
        $this->DestinationAirportId = $destinationAirportId;
        return $this;
    }
    

    
}