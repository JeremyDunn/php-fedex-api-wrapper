<?php
namespace FedEx\LocatorService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data of locations matching the criteria provided in the drop of locator request. A maximum of ten different locations can be returned.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 *
 * @property string $BusinessName
 * @property string $BusinessId
 * @property string $BusinessDescription
 * @property Address $BusinessAddress
 * @property Distance $Distance
 * @property DropoffLocationProfile $ServiceProfile
 * @property  $RecordIndex

 */
class DropoffLocation extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DropoffLocation';

    /**
     * Name of the business at this location.
     *
     * @param string $businessName
     * @return $this
     */
    public function setBusinessName($businessName)
    {
        $this->values['BusinessName'] = $businessName;
        return $this;
    }

    /**
     * Identifier that can be used by IVR Attendant to look up directions to this location.
     *
     * @param string $businessId
     * @return $this
     */
    public function setBusinessId($businessId)
    {
        $this->values['BusinessId'] = $businessId;
        return $this;
    }

    /**
     * A textual description of the type of business, such as "FedEx Authorized Ship Center".
     *
     * @param string $businessDescription
     * @return $this
     */
    public function setBusinessDescription($businessDescription)
    {
        $this->values['BusinessDescription'] = $businessDescription;
        return $this;
    }

    /**
     * The descriptive data of the physical location.
     *
     * @param Address $businessAddress
     * @return $this
     */
    public function setBusinessAddress(Address $businessAddress)
    {
        $this->values['BusinessAddress'] = $businessAddress;
        return $this;
    }

    /**
     * The descriptive data of the distance.
     *
     * @param Distance $distance
     * @return $this
     */
    public function setDistance(Distance $distance)
    {
        $this->values['Distance'] = $distance;
        return $this;
    }

    /**
     * The descriptive data of the services offered at this location.
     *
     * @param DropoffLocationProfile $serviceProfile
     * @return $this
     */
    public function setServiceProfile(DropoffLocationProfile $serviceProfile)
    {
        $this->values['ServiceProfile'] = $serviceProfile;
        return $this;
    }

    /**
     * Of the Total locations available this is the individual location identifier.
     *
     * @param  $recordIndex
     * @return $this
     */
    public function setRecordIndex($recordIndex)
    {
        $this->values['RecordIndex'] = $recordIndex;
        return $this;
    }
}
