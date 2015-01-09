<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data resulting from the processing of an individual line item in a LTL Freight pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CompletedFreightPickupLineItem
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedFreightPickupLineItem';

    /**
     * Identifies the line item, to match reply line with request line.
     *
     * @param int $sequenceNumber
     * @return CompletedFreightPickupLineItem
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the line item, to match reply line with request line.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    
    /**
     * Describes the destination service center handling the delivery of this line item.
     *
     * @param FreightServiceCenterDetail $destination
     * @return CompletedFreightPickupLineItem
     */
    public function setDestination(FreightServiceCenterDetail $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * Returns Describes the destination service center handling the delivery of this line item.
     *
     * @return FreightServiceCenterDetail
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    
    /**
     * Total travel time for this line item.
     *
     * @param duration $totalTravelTime
     * @return CompletedFreightPickupLineItem
     */
    public function setTotalTravelTime(duration $totalTravelTime)
    {
        $this->TotalTravelTime = $totalTravelTime;
        return $this;
    }
    
    /**
     * Returns Total travel time for this line item.
     *
     * @return duration
     */
    public function getTotalTravelTime()
    {
        return $this->TotalTravelTime;
    }
    
    /**
     * Identifies estimated delivery date and time for each line item.
     *
     * @param dateTime $etaDeliveryTimestamp
     * @return CompletedFreightPickupLineItem
     */
    public function setEtaDeliveryTimestamp($etaDeliveryTimestamp)
    {
        $this->EtaDeliveryTimestamp = $etaDeliveryTimestamp;
        return $this;
    }
    
    /**
     * Returns Identifies estimated delivery date and time for each line item.
     *
     * @return dateTime
     */
    public function getEtaDeliveryTimestamp()
    {
        return $this->EtaDeliveryTimestamp;
    }
    

    
}