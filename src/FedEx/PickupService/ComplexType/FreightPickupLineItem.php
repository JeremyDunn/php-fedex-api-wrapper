<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies details about the contents of the shipment to be picked up.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightPickupLineItem
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightPickupLineItem';

    /**
     * Set Service
     *
     * @param \FedEx\Pickup\SimpleType\ServiceType|string $service
     * return FreightPickupLineItem
     */
    public function setService($service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Identifies the line item, to match reply line with request line.
     *
     * @param int $sequenceNumber
     * return FreightPickupLineItem
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Identifies the destination of the shipment.
     *
     * @param Address $destination
     * return FreightPickupLineItem
     */
    public function setDestination(Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * Identifies the physical packaging of the shipment.
     *
     * @param \FedEx\Pickup\SimpleType\PhysicalPackagingType|string $packaging
     * return FreightPickupLineItem
     */
    public function setPackaging($packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Identifies number of items contained in the packaging.
     *
     * @param int $pieces
     * return FreightPickupLineItem
     */
    public function setPieces($pieces)
    {
        $this->Pieces = $pieces;
        return $this;
    }
    
    /**
     * Identifies the total weight of the item being tendered to FedEx for this pickup request.
     *
     * @param Weight $weight
     * return FreightPickupLineItem
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Identifies number of items to be moved.
     *
     * @param int $totalHandlingUnits
     * return FreightPickupLineItem
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->TotalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    
    /**
     * Set PurchaseOrderNumber
     *
     * @param string $purchaseOrderNumber
     * return FreightPickupLineItem
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->PurchaseOrderNumber = $purchaseOrderNumber;
        return $this;
    }
    
    /**
     * Set JustOneMore
     *
     * @param boolean $justOneMore
     * return FreightPickupLineItem
     */
    public function setJustOneMore($justOneMore)
    {
        $this->JustOneMore = $justOneMore;
        return $this;
    }
    
    /**
     * These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below. 
     *
     * @param ShipmentSpecialServicesRequested $specialServicesRequested
     * return FreightPickupLineItem
     */
    public function setSpecialServicesRequested(ShipmentSpecialServicesRequested $specialServicesRequested)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    
    /**
     * Identifies the delivery guarantee information.
     *
     * @param FreightGuaranteeDetail $freightGuaranteeDetail
     * return FreightPickupLineItem
     */
    public function setFreightGuaranteeDetail(FreightGuaranteeDetail $freightGuaranteeDetail)
    {
        $this->FreightGuaranteeDetail = $freightGuaranteeDetail;
        return $this;
    }
    
    /**
     * Describes the contents of the package.
     *
     * @param string $description
     * return FreightPickupLineItem
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}