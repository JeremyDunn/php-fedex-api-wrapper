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
     * return CompletedFreightPickupLineItem
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Describes the destination service center handling the delivery of this line item.
     *
     * @param FreightServiceCenterDetail $destination
     * return CompletedFreightPickupLineItem
     */
    public function setDestination(FreightServiceCenterDetail $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * Total travel time for this line item.
     *
     * @param duration $totalTravelTime
     * return CompletedFreightPickupLineItem
     */
    public function setTotalTravelTime(duration $totalTravelTime)
    {
        $this->TotalTravelTime = $totalTravelTime;
        return $this;
    }
    
    /**
     * Identifies estimated delivery date and time for each line item.
     *
     * @param dateTime $etaDeliveryTimestamp
     * return CompletedFreightPickupLineItem
     */
    public function setEtaDeliveryTimestamp($etaDeliveryTimestamp)
    {
        $this->EtaDeliveryTimestamp = $etaDeliveryTimestamp;
        return $this;
    }
    

    
}