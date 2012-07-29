<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Provides reply information specific to a tag request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedTagDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedTagDetail';

    /**
     * .
     *
     * @param string $confirmationNumber
     * return CompletedTagDetail
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->ConfirmationNumber = $confirmationNumber;
        return $this;
    }
    
    /**
     * As of June 2007, returned only for FedEx Express services.
     *
     * @param duration $accessTime
     * return CompletedTagDetail
     */
    public function setAccessTime(duration $accessTime)
    {
        $this->AccessTime = $accessTime;
        return $this;
    }
    
    /**
     * As of June 2007, returned only for FedEx Express services.
     *
     * @param time $cutoffTime
     * return CompletedTagDetail
     */
    public function setCutoffTime(time $cutoffTime)
    {
        $this->CutoffTime = $cutoffTime;
        return $this;
    }
    
    /**
     * As of June 2007, returned only for FedEx Express services.
     *
     * @param string $location
     * return CompletedTagDetail
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * As of June 2007, returned only for FedEx Express services.
     *
     * @param dateTime $deliveryCommitment
     * return CompletedTagDetail
     */
    public function setDeliveryCommitment($deliveryCommitment)
    {
        $this->DeliveryCommitment = $deliveryCommitment;
        return $this;
    }
    
    /**
     * FEDEX INTERNAL USE ONLY: for use by INET.
     *
     * @param date $dispatchDate
     * return CompletedTagDetail
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    

    
}