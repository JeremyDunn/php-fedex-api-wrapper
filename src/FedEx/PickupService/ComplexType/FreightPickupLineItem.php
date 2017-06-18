<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies details about the contents of the shipment to be picked up.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
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
 * @property FreightGuaranteeDetail $FreightGuaranteeDetail
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
     * Identifies the destination of the shipment.
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
     * Identifies the physical packaging of the shipment.
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
     * Identifies number of items contained in the packaging.
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
     * Identifies the total weight of the item being tendered to FedEx for this pickup request.
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
     * Identifies number of items to be moved.
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
     * These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
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
     * Identifies the delivery guarantee information.
     *
     * @param FreightGuaranteeDetail $freightGuaranteeDetail
     * @return $this
     */
    public function setFreightGuaranteeDetail(FreightGuaranteeDetail $freightGuaranteeDetail)
    {
        $this->values['FreightGuaranteeDetail'] = $freightGuaranteeDetail;
        return $this;
    }

    /**
     * Describes the contents of the package.
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
