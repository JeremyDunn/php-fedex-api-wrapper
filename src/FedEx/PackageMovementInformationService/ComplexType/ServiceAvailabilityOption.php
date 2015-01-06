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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ServiceAvailabilityOption';

    /**
     * Identifies a FedEx Service that is available between the origin and destination provided in the request.
     *
     * @param \FedEx\PackageMovementInformationService\SimpleType\ServiceType|string $service
     * @return ServiceAvailabilityOption
     */
    public function setService($service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Returns Identifies a FedEx Service that is available between the origin and destination provided in the request.
     *
     * @return \FedEx\PackageMovementInformationService\SimpleType\ServiceType|string
     */
    public function getService()
    {
        return $this->Service;
    }
    
    /**
     * Identifies the delivery date of the available service.
     *
     * @param date $deliveryDate
     * @return ServiceAvailabilityOption
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    
    /**
     * Returns Identifies the delivery date of the available service.
     *
     * @return date
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    
    /**
     * Identifies the delivery day of week of the available service. See DayOfWeekType for valid values.
     *
     * @param \FedEx\PackageMovementInformationService\SimpleType\DayOfWeekType|string $deliveryDay
     * @return ServiceAvailabilityOption
     */
    public function setDeliveryDay($deliveryDay)
    {
        $this->DeliveryDay = $deliveryDay;
        return $this;
    }
    
    /**
     * Returns Identifies the delivery day of week of the available service. See DayOfWeekType for valid values.
     *
     * @return \FedEx\PackageMovementInformationService\SimpleType\DayOfWeekType|string
     */
    public function getDeliveryDay()
    {
        return $this->DeliveryDay;
    }
    
    /**
     * Identifies the FedEx location identifier of the package destination.
     *
     * @param string $destinationStationId
     * @return ServiceAvailabilityOption
     */
    public function setDestinationStationId($destinationStationId)
    {
        $this->DestinationStationId = $destinationStationId;
        return $this;
    }
    
    /**
     * Returns Identifies the FedEx location identifier of the package destination.
     *
     * @return string
     */
    public function getDestinationStationId()
    {
        return $this->DestinationStationId;
    }
    
    /**
     * Identification of an airport, using standard three-letter abbreviations.
     *
     * @param string $destinationAirportId
     * @return ServiceAvailabilityOption
     */
    public function setDestinationAirportId($destinationAirportId)
    {
        $this->DestinationAirportId = $destinationAirportId;
        return $this;
    }
    
    /**
     * Returns Identification of an airport, using standard three-letter abbreviations.
     *
     * @return string
     */
    public function getDestinationAirportId()
    {
        return $this->DestinationAirportId;
    }
    

    
}