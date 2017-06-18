<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data about the origin of the shipment being picked up by FedEx.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property boolean $UseAccountAddress
 * @property string $AddressId
 * @property ContactAndAddress $PickupLocation
 * @property \FedEx\PickupService\SimpleType\PickupBuildingLocationType|string $PackageLocation
 * @property \FedEx\PickupService\SimpleType\BuildingPartCode|string $BuildingPart
 * @property string $BuildingPartDescription
 * @property string $ReadyTimestamp
 * @property string $CompanyCloseTime
 * @property boolean $StayLate
 * @property \FedEx\PickupService\SimpleType\PickupRequestType|string $PickupDateType
 * @property string $LastAccessTime
 * @property string $GeographicalPostalCode
 * @property string $Location
 * @property boolean $DeleteLastUsed
 * @property string $SuppliesRequested
 * @property boolean $EarlyPickup

 */
class PickupOriginDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupOriginDetail';

    /**
     * Flag identifies if customer wants to use Account address or send and alternate address for pickup.
     *
     * @param boolean $useAccountAddress
     * @return $this
     */
    public function setUseAccountAddress($useAccountAddress)
    {
        $this->values['UseAccountAddress'] = $useAccountAddress;
        return $this;
    }

    /**
     * FedEx USE ONLY (with IVR client)
     *
     * @param string $addressId
     * @return $this
     */
    public function setAddressId($addressId)
    {
        $this->values['AddressId'] = $addressId;
        return $this;
    }

    /**
     * Descriptive data about the physical location of the package being picked up by FedEx.
     *
     * @param ContactAndAddress $pickupLocation
     * @return $this
     */
    public function setPickupLocation(ContactAndAddress $pickupLocation)
    {
        $this->values['PickupLocation'] = $pickupLocation;
        return $this;
    }

    /**
     * Identifies the physical location where the courier should pick up the shipment. See CourierDispatchBuildingLocationType for valid values.
     *
     * @param \FedEx\PickupService\SimpleType\PickupBuildingLocationType|string $packageLocation
     * @return $this
     */
    public function setPackageLocation($packageLocation)
    {
        $this->values['PackageLocation'] = $packageLocation;
        return $this;
    }

    /**
     * Set BuildingPart
     *
     * @param \FedEx\PickupService\SimpleType\BuildingPartCode|string $buildingPart
     * @return $this
     */
    public function setBuildingPart($buildingPart)
    {
        $this->values['BuildingPart'] = $buildingPart;
        return $this;
    }

    /**
     * Identifies additional descriptive information associated with the BuildingPartCode to assist the FedEx courier in finding the pickup location.
     *
     * @param string $buildingPartDescription
     * @return $this
     */
    public function setBuildingPartDescription($buildingPartDescription)
    {
        $this->values['BuildingPartDescription'] = $buildingPartDescription;
        return $this;
    }

    /**
     * Identifies the date and time the package will be ready for pickup by FedEx. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the pickup based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD (e.g. 2006-06-26). The time component must be in the format: HH:MM:SS in 24-hour form. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00). Because this is a local time, no TZD should be included. If a TZD is included, it will be ignored, and the time treated as local to the pickup postal code.
     *
     * @param string $readyTimestamp
     * @return $this
     */
    public function setReadyTimestamp($readyTimestamp)
    {
        $this->values['ReadyTimestamp'] = $readyTimestamp;
        return $this;
    }

    /**
     * Identifies the close time of the company requesting the pickup. The time is the local time of the pickup based on the shipper's time zone. The time component must be in the format: HH:MM:SS in 24-hour form (e.g. 17:00:00). Because this is a local time, no TZD should be included. If a TZD is included, it will be ignored, and the time treated as local to the pickup postal code.
     *
     * @param string $companyCloseTime
     * @return $this
     */
    public function setCompanyCloseTime($companyCloseTime)
    {
        $this->values['CompanyCloseTime'] = $companyCloseTime;
        return $this;
    }

    /**
     * FedEx IVR Only. Customer is willing to stay late for pickup.
     *
     * @param boolean $stayLate
     * @return $this
     */
    public function setStayLate($stayLate)
    {
        $this->values['StayLate'] = $stayLate;
        return $this;
    }

    /**
     * FedEx USE ONLY (with IVR client)
     *
     * @param \FedEx\PickupService\SimpleType\PickupRequestType|string $pickupDateType
     * @return $this
     */
    public function setPickupDateType($pickupDateType)
    {
        $this->values['PickupDateType'] = $pickupDateType;
        return $this;
    }

    /**
     * FedEx IVR Only
     *
     * @param string $lastAccessTime
     * @return $this
     */
    public function setLastAccessTime($lastAccessTime)
    {
        $this->values['LastAccessTime'] = $lastAccessTime;
        return $this;
    }

    /**
     * Alternate postal code tied to pickup location (European pickups)
     *
     * @param string $geographicalPostalCode
     * @return $this
     */
    public function setGeographicalPostalCode($geographicalPostalCode)
    {
        $this->values['GeographicalPostalCode'] = $geographicalPostalCode;
        return $this;
    }

    /**
     * FedEx USE ONLY
     *
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->values['Location'] = $location;
        return $this;
    }

    /**
     * FedEx USE ONLY (with IVR client)
     *
     * @param boolean $deleteLastUsed
     * @return $this
     */
    public function setDeleteLastUsed($deleteLastUsed)
    {
        $this->values['DeleteLastUsed'] = $deleteLastUsed;
        return $this;
    }

    /**
     * Set SuppliesRequested
     *
     * @param string $suppliesRequested
     * @return $this
     */
    public function setSuppliesRequested($suppliesRequested)
    {
        $this->values['SuppliesRequested'] = $suppliesRequested;
        return $this;
    }

    /**
     * Applies only to Europe
     *
     * @param boolean $earlyPickup
     * @return $this
     */
    public function setEarlyPickup($earlyPickup)
    {
        $this->values['EarlyPickup'] = $earlyPickup;
        return $this;
    }
}
