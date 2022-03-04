<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class describes the pickup characteristics of a shipment (e.g. for use in a tag request).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string $ReadyDateTime
 * @property string $LatestPickupDateTime
 * @property string $CourierInstructions
 * @property \FedEx\RateService\SimpleType\PickupRequestType|string $RequestType
 * @property \FedEx\RateService\SimpleType\PickupRequestSourceType|string $RequestSource

 */
class PickupDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupDetail';

    /**
     * Set ReadyDateTime
     *
     * @param string $readyDateTime
     * @return $this
     */
    public function setReadyDateTime($readyDateTime)
    {
        $this->values['ReadyDateTime'] = $readyDateTime;
        return $this;
    }

    /**
     * Set LatestPickupDateTime
     *
     * @param string $latestPickupDateTime
     * @return $this
     */
    public function setLatestPickupDateTime($latestPickupDateTime)
    {
        $this->values['LatestPickupDateTime'] = $latestPickupDateTime;
        return $this;
    }

    /**
     * Set CourierInstructions
     *
     * @param string $courierInstructions
     * @return $this
     */
    public function setCourierInstructions($courierInstructions)
    {
        $this->values['CourierInstructions'] = $courierInstructions;
        return $this;
    }

    /**
     * Set RequestType
     *
     * @param \FedEx\RateService\SimpleType\PickupRequestType|string $requestType
     * @return $this
     */
    public function setRequestType($requestType)
    {
        $this->values['RequestType'] = $requestType;
        return $this;
    }

    /**
     * Set RequestSource
     *
     * @param \FedEx\RateService\SimpleType\PickupRequestSourceType|string $requestSource
     * @return $this
     */
    public function setRequestSource($requestSource)
    {
        $this->values['RequestSource'] = $requestSource;
        return $this;
    }
}
