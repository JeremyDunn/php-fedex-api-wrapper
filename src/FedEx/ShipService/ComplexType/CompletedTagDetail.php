<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Provides reply information specific to a tag request.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedTagDetail
    extends AbstractComplexType
{
    protected $_name = 'CompletedTagDetail';

    /**
     * .
     *
     * @param string $ConfirmationNumber
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
     * @param duration $AccessTime
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
     * @param time $CutoffTime
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
     * @param string $Location
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
     * @param dateTime $DeliveryCommitment
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
     * @param date $DispatchDate
     * return CompletedTagDetail
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    

    
}