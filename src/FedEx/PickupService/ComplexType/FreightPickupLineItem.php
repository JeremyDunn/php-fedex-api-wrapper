<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FreightPickupLineItem
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $TrackingNumber
 * @property \FedEx\PickupService\SimpleType\ServiceType|string $Service
 * @property int $SequenceNumber
 * @property Address $Destination
 * @property \FedEx\PickupService\SimpleType\PhysicalPackagingType|string $Packaging
 * @property int $Pieces
 * @property Weight $Weight
 * @property int $TotalHandlingUnits
 * @property string $PurchaseOrderNumber
 * @property boolean $JustOneMore
 * @property ShipmentSpecialServicesRequested $SpecialServicesRequested
 * @property string $Description

 */
class FreightPickupLineItem extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FreightPickupLineItem';

    /**
     * Set TrackingNumber
     *
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['TrackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Set Service
     *
     * @param \FedEx\PickupService\SimpleType\ServiceType|string $service
     * @return $this
     */
    public function setService($service)
    {
        $this->values['Service'] = $service;
        return $this;
    }

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
     * Set Destination
     *
     * @param Address $destination
     * @return $this
     */
    public function setDestination(Address $destination)
    {
        $this->values['Destination'] = $destination;
        return $this;
    }

    /**
     * Set Packaging
     *
     * @param \FedEx\PickupService\SimpleType\PhysicalPackagingType|string $packaging
     * @return $this
     */
    public function setPackaging($packaging)
    {
        $this->values['Packaging'] = $packaging;
        return $this;
    }

    /**
     * Set Pieces
     *
     * @param int $pieces
     * @return $this
     */
    public function setPieces($pieces)
    {
        $this->values['Pieces'] = $pieces;
        return $this;
    }

    /**
     * Set Weight
     *
     * @param Weight $weight
     * @return $this
     */
    public function setWeight(Weight $weight)
    {
        $this->values['Weight'] = $weight;
        return $this;
    }

    /**
     * Set TotalHandlingUnits
     *
     * @param int $totalHandlingUnits
     * @return $this
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->values['TotalHandlingUnits'] = $totalHandlingUnits;
        return $this;
    }

    /**
     * Set PurchaseOrderNumber
     *
     * @param string $purchaseOrderNumber
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->values['PurchaseOrderNumber'] = $purchaseOrderNumber;
        return $this;
    }

    /**
     * Set JustOneMore
     *
     * @param boolean $justOneMore
     * @return $this
     */
    public function setJustOneMore($justOneMore)
    {
        $this->values['JustOneMore'] = $justOneMore;
        return $this;
    }

    /**
     * Set SpecialServicesRequested
     *
     * @param ShipmentSpecialServicesRequested $specialServicesRequested
     * @return $this
     */
    public function setSpecialServicesRequested(ShipmentSpecialServicesRequested $specialServicesRequested)
    {
        $this->values['SpecialServicesRequested'] = $specialServicesRequested;
        return $this;
    }

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
}
