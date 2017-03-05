<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Provides reply information specific to a tag request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $ConfirmationNumber
 * @property duration $AccessTime
 * @property time $CutoffTime
 * @property string $Location
 * @property dateTime $DeliveryCommitment
 * @property date $DispatchDate

 */
class CompletedTagDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CompletedTagDetail';

    /**
     * .
     *
     * @param string $confirmationNumber
     * @return $this
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->values['ConfirmationNumber'] = $confirmationNumber;
        return $this;
    }

    /**
     * As of June 2007, returned only for FedEx Express services.
     *
     * @param duration $accessTime
     * @return $this
     */
    public function setAccessTime(duration $accessTime)
    {
        $this->values['AccessTime'] = $accessTime;
        return $this;
    }

    /**
     * As of June 2007, returned only for FedEx Express services.
     *
     * @param time $cutoffTime
     * @return $this
     */
    public function setCutoffTime(time $cutoffTime)
    {
        $this->values['CutoffTime'] = $cutoffTime;
        return $this;
    }

    /**
     * As of June 2007, returned only for FedEx Express services.
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
     * As of June 2007, returned only for FedEx Express services.
     *
     * @param dateTime $deliveryCommitment
     * @return $this
     */
    public function setDeliveryCommitment($deliveryCommitment)
    {
        $this->values['DeliveryCommitment'] = $deliveryCommitment;
        return $this;
    }

    /**
     * FEDEX INTERNAL USE ONLY: for use by INET.
     *
     * @param date $dispatchDate
     * @return $this
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->values['DispatchDate'] = $dispatchDate;
        return $this;
    }

    
}
