<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The constraints on the scheduling of a dispatch, where that dispatch would be made by the Carrier, occur on the PickupDate,
and would be scheduled (created by means of a CourierDispatchRequest) on a date related to the PickupDate as described
by the "ScheduleDay" (SAME_DAY meaning that the creation would occur on the PickupDate, and FUTURE_DAY meaning that the creation
would occur on a date prior to the PickupDate).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 *
 * @property \FedEx\CourierDispatchService\SimpleType\CarrierCodeType|string $Carrier
 * @property string $Description
 * @property \FedEx\CourierDispatchService\SimpleType\PickupRequestType|string $ScheduleDay
 * @property boolean $Available
 * @property string $PickupDate
 * @property string $CutOffTime
 * @property string $AccessTime
 * @property boolean $ResidentialAvailable

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
     * the carrier to which this PickupScheduleOption applies
     *
     * @param \FedEx\CourierDispatchService\SimpleType\CarrierCodeType|string $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->values['Carrier'] = $carrier;
        return $this;
    }

    /**
     * Descriptive information about the shipment.
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
     * Tells whether this option describes a dispatch created on the dispatch date (SAME_DAY), or on a prior date (FUTURE_DAY)
     *
     * @param \FedEx\CourierDispatchService\SimpleType\PickupRequestType|string $scheduleDay
     * @return $this
     */
    public function setScheduleDay($scheduleDay)
    {
        $this->values['ScheduleDay'] = $scheduleDay;
        return $this;
    }

    /**
     * True if this pickup option is available.
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
     * Identifies the date (in the postal code's time zone) to which this PickupScheduleOption refers.
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
     * Identifies the latest allowed ready time (in the postal code's time zone) for a postal code. As a local time, it will not include a Time Zone Designator
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
     * Identifies the minimum required length of the window of time between the ReadyTime and the CustomerCloseTime.
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
     * Identifies availability of residential pickup.
     *
     * @param boolean $residentialAvailable
     * @return $this
     */
    public function setResidentialAvailable($residentialAvailable)
    {
        $this->values['ResidentialAvailable'] = $residentialAvailable;
        return $this;
    }
}
