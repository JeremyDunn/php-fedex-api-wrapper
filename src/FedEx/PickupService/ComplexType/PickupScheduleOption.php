<?php
namespace FedEx\PickupService\ComplexType;

/**
 * The constraints on the scheduling of a dispatch, where that dispatch would be made by the Carrier, occur on the PickupDate,
						and would be scheduled (created by means of a CourierDispatchRequest) on a date related to the PickupDate as described
						by the "ScheduleDay" (SAME_DAY meaning that the creation would occur on the PickupDate, and FUTURE_DAY meaning that the creation
						would occur on a date prior to the PickupDate).
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupScheduleOption
    extends AbstractComplexType
{
    protected $_name = 'PickupScheduleOption';

    /**
     * the carrier to which this PickupScheduleOption applies
     *
     * @param CarrierCodeType $Carrier
     * return PickupScheduleOption
     */
    public function setCarrier(\FedEx\PickupService\SimpleType\CarrierCodeType $carrier)
    {
        $this->Carrier = $carrier;
        return $this;
    }
    
    /**
     * Descriptive information about the shipment.
     *
     * @param string $Description
     * return PickupScheduleOption
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Tells whether this option describes a dispatch created on the dispatch date (SAME_DAY), or on a prior date (FUTURE_DAY)
     *
     * @param PickupRequestType $ScheduleDay
     * return PickupScheduleOption
     */
    public function setScheduleDay(\FedEx\PickupService\SimpleType\PickupRequestType $scheduleDay)
    {
        $this->ScheduleDay = $scheduleDay;
        return $this;
    }
    
    /**
     * True if this pickup option is available.
     *
     * @param boolean $Available
     * return PickupScheduleOption
     */
    public function setAvailable($available)
    {
        $this->Available = $available;
        return $this;
    }
    
    /**
     * Identifies the date (in the postal code's time zone) to which this PickupScheduleOption refers.
     *
     * @param date $PickupDate
     * return PickupScheduleOption
     */
    public function setPickupDate($pickupDate)
    {
        $this->PickupDate = $pickupDate;
        return $this;
    }
    
    /**
     * Identifies the latest allowed ready time (in the postal code's time zone) for a postal code. As a local time, it will not include a Time Zone Designator
     *
     * @param time $CutOffTime
     * return PickupScheduleOption
     */
    public function setCutOffTime(time $cutOffTime)
    {
        $this->CutOffTime = $cutOffTime;
        return $this;
    }
    
    /**
     * Identifies the minimum required length of the window of time between the ReadyTime and the CustomerCloseTime.
     *
     * @param duration $AccessTime
     * return PickupScheduleOption
     */
    public function setAccessTime(duration $accessTime)
    {
        $this->AccessTime = $accessTime;
        return $this;
    }
    
    /**
     * Indicates whether residential pickup is available for the requested postal code.
     *
     * @param boolean $ResidentialAvailable
     * return PickupScheduleOption
     */
    public function setResidentialAvailable($residentialAvailable)
    {
        $this->ResidentialAvailable = $residentialAvailable;
        return $this;
    }
    
    /**
     * Describes the country relationship (domestic and/or international) among the shipments being picked up.
     *
     * @param CountryRelationshipType $CountryRelationship
     * return PickupScheduleOption
     */
    public function setCountryRelationship(\FedEx\PickupService\SimpleType\CountryRelationshipType $countryRelationship)
    {
        $this->CountryRelationship = $countryRelationship;
        return $this;
    }
    

    
}