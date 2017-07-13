<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data resulting from the processing of an individual line item in a LTL Freight pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property int $SequenceNumber
 * @property FreightServiceCenterDetail $Destination
 * @property string $TotalTravelTime
 * @property string $EtaDeliveryTimestamp

 */
class CompletedFreightPickupLineItem extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CompletedFreightPickupLineItem';

    /**
     * Identifies the line item, to match reply line with request line.
     *
     * @param int $sequenceNumber
     * @return $this
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->values['SequenceNumber'] = $sequenceNumber;
        return $this;
    }

    /**
     * Describes the destination service center handling the delivery of this line item.
     *
     * @param FreightServiceCenterDetail $destination
     * @return $this
     */
    public function setDestination(FreightServiceCenterDetail $destination)
    {
        $this->values['Destination'] = $destination;
        return $this;
    }

    /**
     * Total travel time for this line item.
     *
     * @param string $totalTravelTime
     * @return $this
     */
    public function setTotalTravelTime($totalTravelTime)
    {
        $this->values['TotalTravelTime'] = $totalTravelTime;
        return $this;
    }

    /**
     * Identifies estimated delivery date and time for each line item.
     *
     * @param string $etaDeliveryTimestamp
     * @return $this
     */
    public function setEtaDeliveryTimestamp($etaDeliveryTimestamp)
    {
        $this->values['EtaDeliveryTimestamp'] = $etaDeliveryTimestamp;
        return $this;
    }
}
