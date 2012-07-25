<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Data resulting from the processing of an individual line item in a LTL Freight pickup request.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CompletedFreightPickupLineItem
    extends AbstractComplexType
{
    protected $_name = 'CompletedFreightPickupLineItem';

    /**
     * Identifies the line item, to match reply line with request line.
     *
     * @param int $SequenceNumber
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
     * @param FreightServiceCenterDetail $Destination
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
     * @param duration $TotalTravelTime
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
     * @param dateTime $EtaDeliveryTimestamp
     * return CompletedFreightPickupLineItem
     */
    public function setEtaDeliveryTimestamp($etaDeliveryTimestamp)
    {
        $this->EtaDeliveryTimestamp = $etaDeliveryTimestamp;
        return $this;
    }
    

    
}