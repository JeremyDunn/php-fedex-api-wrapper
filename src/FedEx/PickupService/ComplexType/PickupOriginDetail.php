<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupOriginDetail
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
     * Set UseAccountAddress
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
     * Set PickupLocation
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
     * Set PackageLocation
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
     * Set BuildingPartDescription
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
     * Set ReadyTimestamp
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
     * Set CompanyCloseTime
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
