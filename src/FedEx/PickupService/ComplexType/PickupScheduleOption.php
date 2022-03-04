<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupScheduleOption
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\CarrierCodeType|string $Carrier
 * @property string $Description
 * @property \FedEx\PickupService\SimpleType\PickupRequestType|string $ScheduleDay
 * @property boolean $Available
 * @property string $PickupDate
 * @property string $CutOffTime
 * @property string $AccessTime
 * @property boolean $ResidentialAvailable
 * @property \FedEx\PickupService\SimpleType\CountryRelationshipType|string $CountryRelationship

 */
class PickupScheduleOption extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupScheduleOption';

    /**
     * Set Carrier
     *
     * @param \FedEx\PickupService\SimpleType\CarrierCodeType|string $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->values['Carrier'] = $carrier;
        return $this;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Set ScheduleDay
     *
     * @param \FedEx\PickupService\SimpleType\PickupRequestType|string $scheduleDay
     * @return $this
     */
    public function setScheduleDay($scheduleDay)
    {
        $this->values['ScheduleDay'] = $scheduleDay;
        return $this;
    }

    /**
     * Set Available
     *
     * @param boolean $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->values['Available'] = $available;
        return $this;
    }

    /**
     * Set PickupDate
     *
     * @param string $pickupDate
     * @return $this
     */
    public function setPickupDate($pickupDate)
    {
        $this->values['PickupDate'] = $pickupDate;
        return $this;
    }

    /**
     * Set CutOffTime
     *
     * @param string $cutOffTime
     * @return $this
     */
    public function setCutOffTime($cutOffTime)
    {
        $this->values['CutOffTime'] = $cutOffTime;
        return $this;
    }

    /**
     * Set AccessTime
     *
     * @param string $accessTime
     * @return $this
     */
    public function setAccessTime($accessTime)
    {
        $this->values['AccessTime'] = $accessTime;
        return $this;
    }

    /**
     * Indicates whether residential pickup is available for the requested postal code.
     *
     * @param boolean $residentialAvailable
     * @return $this
     */
    public function setResidentialAvailable($residentialAvailable)
    {
        $this->values['ResidentialAvailable'] = $residentialAvailable;
        return $this;
    }

    /**
     * Describes the country relationship (domestic and/or international) among the shipments being picked up.
     *
     * @param \FedEx\PickupService\SimpleType\CountryRelationshipType|string $countryRelationship
     * @return $this
     */
    public function setCountryRelationship($countryRelationship)
    {
        $this->values['CountryRelationship'] = $countryRelationship;
        return $this;
    }
}
