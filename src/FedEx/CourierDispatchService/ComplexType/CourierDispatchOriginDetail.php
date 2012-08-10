<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data about the origin of the package being picked up by FedEx.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class CourierDispatchOriginDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CourierDispatchOriginDetail';

    /**
     * Flag identifies if customer wants to use Account address or send and alternate address for pickup.
     *
     * @param boolean $useAccountAddress
     * return CourierDispatchOriginDetail
     */
    public function setUseAccountAddress($useAccountAddress)
    {
        $this->UseAccountAddress = $useAccountAddress;
        return $this;
    }
    
    /**
     * Descriptive data about the physical location of the package being picked up by FedEx.
     *
     * @param ContactAndAddress $pickupLocation
     * return CourierDispatchOriginDetail
     */
    public function setPickupLocation(ContactAndAddress $pickupLocation)
    {
        $this->PickupLocation = $pickupLocation;
        return $this;
    }
    
    /**
     * Identifies the physical location where the courier should pick up the shipment. See CourierDispatchBuildingLocationType for valid values.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\CourierDispatchBuildingLocationType|string $packageLocation
     * return CourierDispatchOriginDetail
     */
    public function setPackageLocation($packageLocation)
    {
        $this->PackageLocation = $packageLocation;
        return $this;
    }
    
    /**
     * Identifies the part of the building where the package is located for pickup by FedEx. See BuildingPartCode for valid values.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\BuildingPartCode|string $buildingPartCode
     * return CourierDispatchOriginDetail
     */
    public function setBuildingPartCode($buildingPartCode)
    {
        $this->BuildingPartCode = $buildingPartCode;
        return $this;
    }
    
    /**
     * Identifies additional descriptive information associated with the BuildingPartCode to assist the FedEx courier in finding the pickup location.
     *
     * @param string $buildingPartDescription
     * return CourierDispatchOriginDetail
     */
    public function setBuildingPartDescription($buildingPartDescription)
    {
        $this->BuildingPartDescription = $buildingPartDescription;
        return $this;
    }
    
    /**
     * Identifies the date and time the package will be ready for pickup by FedEx. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the pickup based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD (e.g. 2006-06-26). The time component must be in the format: HH:MM:SS in 24-hour form. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00). Because this is a local time, no TZD should be included. If a TZD is included, it will be ignored, and the time treated as local to the pickup postal code.
     *
     * @param dateTime $readyTimestamp
     * return CourierDispatchOriginDetail
     */
    public function setReadyTimestamp($readyTimestamp)
    {
        $this->ReadyTimestamp = $readyTimestamp;
        return $this;
    }
    
    /**
     * Identifies the close time of the company requesting the pickup. The time is the local time of the pickup based on the shipper's time zone. The time component must be in the format: HH:MM:SS in 24-hour form (e.g. 17:00:00). Because this is a local time, no TZD should be included. If a TZD is included, it will be ignored, and the time treated as local to the pickup postal code.
     *
     * @param time $companyCloseTime
     * return CourierDispatchOriginDetail
     */
    public function setCompanyCloseTime(time $companyCloseTime)
    {
        $this->CompanyCloseTime = $companyCloseTime;
        return $this;
    }
    

    
}