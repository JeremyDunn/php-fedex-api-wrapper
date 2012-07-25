<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Identifies details about the contents of the shipment to be picked up.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightPickupLineItem
    extends AbstractComplexType
{
    protected $_name = 'FreightPickupLineItem';

    /**
     * 
     *
     * @param ServiceType $Service
     * return FreightPickupLineItem
     */
    public function setService(\FedEx\PickupService\SimpleType\ServiceType $service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Identifies the line item, to match reply line with request line.
     *
     * @param int $SequenceNumber
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
     * @param Address $Destination
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
     * @param PhysicalPackagingType $Packaging
     * return FreightPickupLineItem
     */
    public function setPackaging(\FedEx\PickupService\SimpleType\PhysicalPackagingType $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Identifies number of items contained in the packaging.
     *
     * @param int $Pieces
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
     * @param Weight $Weight
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
     * @param int $TotalHandlingUnits
     * return FreightPickupLineItem
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->TotalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $PurchaseOrderNumber
     * return FreightPickupLineItem
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->PurchaseOrderNumber = $purchaseOrderNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $JustOneMore
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
     * @param ShipmentSpecialServicesRequested $SpecialServicesRequested
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
     * @param FreightGuaranteeDetail $FreightGuaranteeDetail
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
     * @param string $Description
     * return FreightPickupLineItem
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}