<?php
namespace FedEx\LocatorService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data of locations matching the criteria provided in the drop of locator request. A maximum of ten different locations can be returned.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 */
class DropoffLocation
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DropoffLocation';

    /**
     * Name of the business at this location.
     *
     * @param string $businessName
     * @return DropoffLocation
     */
    public function setBusinessName($businessName)
    {
        $this->BusinessName = $businessName;
        return $this;
    }
    
    /**
     * Returns Name of the business at this location.
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->BusinessName;
    }
    
    /**
     * Identifier that can be used by IVR Attendant to look up directions to this location.
     *
     * @param string $businessId
     * @return DropoffLocation
     */
    public function setBusinessId($businessId)
    {
        $this->BusinessId = $businessId;
        return $this;
    }
    
    /**
     * Returns Identifier that can be used by IVR Attendant to look up directions to this location.
     *
     * @return string
     */
    public function getBusinessId()
    {
        return $this->BusinessId;
    }
    
    /**
     * A textual description of the type of business, such as "FedEx Authorized Ship Center".
     *
     * @param string $businessDescription
     * @return DropoffLocation
     */
    public function setBusinessDescription($businessDescription)
    {
        $this->BusinessDescription = $businessDescription;
        return $this;
    }
    
    /**
     * Returns A textual description of the type of business, such as "FedEx Authorized Ship Center".
     *
     * @return string
     */
    public function getBusinessDescription()
    {
        return $this->BusinessDescription;
    }
    
    /**
     * The descriptive data of the physical location.
     *
     * @param Address $businessAddress
     * @return DropoffLocation
     */
    public function setBusinessAddress(Address $businessAddress)
    {
        $this->BusinessAddress = $businessAddress;
        return $this;
    }
    
    /**
     * Returns The descriptive data of the physical location.
     *
     * @return Address
     */
    public function getBusinessAddress()
    {
        return $this->BusinessAddress;
    }
    
    /**
     * The descriptive data of the distance.
     *
     * @param Distance $distance
     * @return DropoffLocation
     */
    public function setDistance(Distance $distance)
    {
        $this->Distance = $distance;
        return $this;
    }
    
    /**
     * Returns The descriptive data of the distance.
     *
     * @return Distance
     */
    public function getDistance()
    {
        return $this->Distance;
    }
    
    /**
     * The descriptive data of the services offered at this location.
     *
     * @param DropoffLocationProfile $serviceProfile
     * @return DropoffLocation
     */
    public function setServiceProfile(DropoffLocationProfile $serviceProfile)
    {
        $this->ServiceProfile = $serviceProfile;
        return $this;
    }
    
    /**
     * Returns The descriptive data of the services offered at this location.
     *
     * @return DropoffLocationProfile
     */
    public function getServiceProfile()
    {
        return $this->ServiceProfile;
    }
    
    /**
     * Of the Total locations available this is the individual location identifier.
     *
     * @param  $recordIndex
     * @return DropoffLocation
     */
    public function setRecordIndex( $recordIndex)
    {
        $this->RecordIndex = $recordIndex;
        return $this;
    }
    
    /**
     * Returns Of the Total locations available this is the individual location identifier.
     *
     * @return 
     */
    public function getRecordIndex()
    {
        return $this->RecordIndex;
    }
    

    
}