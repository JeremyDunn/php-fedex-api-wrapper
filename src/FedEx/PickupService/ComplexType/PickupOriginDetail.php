<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Descriptive data about the origin of the shipment being picked up by FedEx.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupOriginDetail
    extends AbstractComplexType
{
    protected $_name = 'PickupOriginDetail';

    /**
     * Flag identifies if customer wants to use Account address or send and alternate address for pickup.
     *
     * @param boolean $UseAccountAddress
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
     * @param string $AddressId
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
     * @param ContactAndAddress $PickupLocation
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
     * @param PickupBuildingLocationType $PackageLocation
     * return PickupOriginDetail
     */
    public function setPackageLocation(\FedEx\PickupService\SimpleType\PickupBuildingLocationType $packageLocation)
    {
        $this->PackageLocation = $packageLocation;
        return $this;
    }
    
    /**
     * 
     *
     * @param BuildingPartCode $BuildingPart
     * return PickupOriginDetail
     */
    public function setBuildingPart(\FedEx\PickupService\SimpleType\BuildingPartCode $buildingPart)
    {
        $this->BuildingPart = $buildingPart;
        return $this;
    }
    
    /**
     * Identifies additional descriptive information associated with the BuildingPartCode to assist the FedEx courier in finding the pickup location.
     *
     * @param string $BuildingPartDescription
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
     * @param dateTime $ReadyTimestamp
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
     * @param time $CompanyCloseTime
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
     * @param boolean $StayLate
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
     * @param PickupRequestType $PickupDateType
     * return PickupOriginDetail
     */
    public function setPickupDateType(\FedEx\PickupService\SimpleType\PickupRequestType $pickupDateType)
    {
        $this->PickupDateType = $pickupDateType;
        return $this;
    }
    
    /**
     * FedEx IVR Only
     *
     * @param time $LastAccessTime
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
     * @param string $GeographicalPostalCode
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
     * @param string $Location
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
     * @param boolean $DeleteLastUsed
     * return PickupOriginDetail
     */
    public function setDeleteLastUsed($deleteLastUsed)
    {
        $this->DeleteLastUsed = $deleteLastUsed;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $SuppliesRequested
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
     * @param boolean $EarlyPickup
     * return PickupOriginDetail
     */
    public function setEarlyPickup($earlyPickup)
    {
        $this->EarlyPickup = $earlyPickup;
        return $this;
    }
    

    
}