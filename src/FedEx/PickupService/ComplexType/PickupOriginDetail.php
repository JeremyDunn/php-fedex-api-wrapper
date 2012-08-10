<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data about the origin of the shipment being picked up by FedEx.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupOriginDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PickupOriginDetail';

    /**
     * Flag identifies if customer wants to use Account address or send and alternate address for pickup.
     *
     * @param boolean $useAccountAddress
     * return PickupOriginDetail
     */
    public function setUseAccountAddress($useAccountAddress)
    {
        $this->UseAccountAddress = $useAccountAddress;
        return $this;
    }
    
    /**
     * FedEx USE ONLY (with IVR client)
     *
     * @param string $addressId
     * return PickupOriginDetail
     */
    public function setAddressId($addressId)
    {
        $this->AddressId = $addressId;
        return $this;
    }
    
    /**
     * Descriptive data about the physical location of the package being picked up by FedEx.
     *
     * @param ContactAndAddress $pickupLocation
     * return PickupOriginDetail
     */
    public function setPickupLocation(ContactAndAddress $pickupLocation)
    {
        $this->PickupLocation = $pickupLocation;
        return $this;
    }
    
    /**
     * Identifies the physical location where the courier should pick up the shipment. See CourierDispatchBuildingLocationType for valid values.
     *
     * @param \FedEx\Pickup\SimpleType\PickupBuildingLocationType|string $packageLocation
     * return PickupOriginDetail
     */
    public function setPackageLocation($packageLocation)
    {
        $this->PackageLocation = $packageLocation;
        return $this;
    }
    
    /**
     * Set BuildingPart
     *
     * @param \FedEx\Pickup\SimpleType\BuildingPartCode|string $buildingPart
     * return PickupOriginDetail
     */
    public function setBuildingPart($buildingPart)
    {
        $this->BuildingPart = $buildingPart;
        return $this;
    }
    
    /**
     * Identifies additional descriptive information associated with the BuildingPartCode to assist the FedEx courier in finding the pickup location.
     *
     * @param string $buildingPartDescription
     * return PickupOriginDetail
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
     * return PickupOriginDetail
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
     * return PickupOriginDetail
     */
    public function setCompanyCloseTime(time $companyCloseTime)
    {
        $this->CompanyCloseTime = $companyCloseTime;
        return $this;
    }
    
    /**
     * FedEx IVR Only. Customer is willing to stay late for pickup.
     *
     * @param boolean $stayLate
     * return PickupOriginDetail
     */
    public function setStayLate($stayLate)
    {
        $this->StayLate = $stayLate;
        return $this;
    }
    
    /**
     * FedEx USE ONLY (with IVR client)
     *
     * @param \FedEx\Pickup\SimpleType\PickupRequestType|string $pickupDateType
     * return PickupOriginDetail
     */
    public function setPickupDateType($pickupDateType)
    {
        $this->PickupDateType = $pickupDateType;
        return $this;
    }
    
    /**
     * FedEx IVR Only
     *
     * @param time $lastAccessTime
     * return PickupOriginDetail
     */
    public function setLastAccessTime(time $lastAccessTime)
    {
        $this->LastAccessTime = $lastAccessTime;
        return $this;
    }
    
    /**
     * Alternate postal code tied to pickup location (European pickups)
     *
     * @param string $geographicalPostalCode
     * return PickupOriginDetail
     */
    public function setGeographicalPostalCode($geographicalPostalCode)
    {
        $this->GeographicalPostalCode = $geographicalPostalCode;
        return $this;
    }
    
    /**
     * FedEx USE ONLY
     *
     * @param string $location
     * return PickupOriginDetail
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * FedEx USE ONLY (with IVR client)
     *
     * @param boolean $deleteLastUsed
     * return PickupOriginDetail
     */
    public function setDeleteLastUsed($deleteLastUsed)
    {
        $this->DeleteLastUsed = $deleteLastUsed;
        return $this;
    }
    
    /**
     * Set SuppliesRequested
     *
     * @param string $suppliesRequested
     * return PickupOriginDetail
     */
    public function setSuppliesRequested($suppliesRequested)
    {
        $this->SuppliesRequested = $suppliesRequested;
        return $this;
    }
    
    /**
     * Applies only to Europe
     *
     * @param boolean $earlyPickup
     * return PickupOriginDetail
     */
    public function setEarlyPickup($earlyPickup)
    {
        $this->EarlyPickup = $earlyPickup;
        return $this;
    }
    

    
}