<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackSpecialInstruction
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $Description
 * @property \FedEx\TrackService\SimpleType\TrackDeliveryOptionType|string $DeliveryOption
 * @property SpecialInstructionStatusDetail $StatusDetail
 * @property string $OriginalEstimatedDeliveryTimestamp
 * @property string $OriginalRequestTime
 * @property AppointmentDetail $RequestedAppointmentTime

 */
class TrackSpecialInstruction extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackSpecialInstruction';

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
     * Set DeliveryOption
     *
     * @param \FedEx\TrackService\SimpleType\TrackDeliveryOptionType|string $deliveryOption
     * @return $this
     */
    public function setDeliveryOption($deliveryOption)
    {
        $this->values['DeliveryOption'] = $deliveryOption;
        return $this;
    }

    /**
     * Specifies the status and status update time of the track special instructions.
     *
     * @param SpecialInstructionStatusDetail $statusDetail
     * @return $this
     */
    public function setStatusDetail(SpecialInstructionStatusDetail $statusDetail)
    {
        $this->values['StatusDetail'] = $statusDetail;
        return $this;
    }

    /**
     * Specifies the estimated delivery time that was originally estimated when the shipment was shipped.
     *
     * @param string $originalEstimatedDeliveryTimestamp
     * @return $this
     */
    public function setOriginalEstimatedDeliveryTimestamp($originalEstimatedDeliveryTimestamp)
    {
        $this->values['OriginalEstimatedDeliveryTimestamp'] = $originalEstimatedDeliveryTimestamp;
        return $this;
    }

    /**
     * Specifies the time the customer requested a change to the shipment.
     *
     * @param string $originalRequestTime
     * @return $this
     */
    public function setOriginalRequestTime($originalRequestTime)
    {
        $this->values['OriginalRequestTime'] = $originalRequestTime;
        return $this;
    }

    /**
     * The requested appointment time for delivery.
     *
     * @param AppointmentDetail $requestedAppointmentTime
     * @return $this
     */
    public function setRequestedAppointmentTime(AppointmentDetail $requestedAppointmentTime)
    {
        $this->values['RequestedAppointmentTime'] = $requestedAppointmentTime;
        return $this;
    }
}
