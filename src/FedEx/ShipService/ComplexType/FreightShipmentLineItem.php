<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of an individual commodity or class of content in a shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightShipmentLineItem
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightShipmentLineItem';

    /**
     * Freight class for this line item.
     *
     * @param \FedEx\ShipService\SimpleType\FreightClassType|string $freightClass
     * @return FreightShipmentLineItem
     */
    public function setFreightClass($freightClass)
    {
        $this->FreightClass = $freightClass;
        return $this;
    }
    
    /**
     * Returns Freight class for this line item.
     *
     * @return \FedEx\ShipService\SimpleType\FreightClassType|string
     */
    public function getFreightClass()
    {
        return $this->FreightClass;
    }
    
    /**
     * FEDEX INTERNAL USE ONLY: for FedEx system that estimate freight class from customer-provided dimensions and weight.
     *
     * @param boolean $classProvidedByCustomer
     * @return FreightShipmentLineItem
     */
    public function setClassProvidedByCustomer($classProvidedByCustomer)
    {
        $this->ClassProvidedByCustomer = $classProvidedByCustomer;
        return $this;
    }
    
    /**
     * Returns FEDEX INTERNAL USE ONLY: for FedEx system that estimate freight class from customer-provided dimensions and weight.
     *
     * @return boolean
     */
    public function getClassProvidedByCustomer()
    {
        return $this->ClassProvidedByCustomer;
    }
    
    /**
     * Number of individual handling units to which this line applies. (NOTE: Total of line-item-level handling units may not balance to shipment-level total handling units.)
     *
     * @param nonNegativeInteger $handlingUnits
     * @return FreightShipmentLineItem
     */
    public function setHandlingUnits($handlingUnits)
    {
        $this->HandlingUnits = $handlingUnits;
        return $this;
    }
    
    /**
     * Returns Number of individual handling units to which this line applies. (NOTE: Total of line-item-level handling units may not balance to shipment-level total handling units.)
     *
     * @return nonNegativeInteger
     */
    public function getHandlingUnits()
    {
        return $this->HandlingUnits;
    }
    
    /**
     * Specification of handling-unit packaging for this commodity or class line.
     *
     * @param \FedEx\ShipService\SimpleType\PhysicalPackagingType|string $packaging
     * @return FreightShipmentLineItem
     */
    public function setPackaging($packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Returns Specification of handling-unit packaging for this commodity or class line.
     *
     * @return \FedEx\ShipService\SimpleType\PhysicalPackagingType|string
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    
    /**
     * Number of pieces for this commodity or class line.
     *
     * @param nonNegativeInteger $pieces
     * @return FreightShipmentLineItem
     */
    public function setPieces($pieces)
    {
        $this->Pieces = $pieces;
        return $this;
    }
    
    /**
     * Returns Number of pieces for this commodity or class line.
     *
     * @return nonNegativeInteger
     */
    public function getPieces()
    {
        return $this->Pieces;
    }
    
    /**
     * NMFC Code for commodity.
     *
     * @param string $nmfcCode
     * @return FreightShipmentLineItem
     */
    public function setNmfcCode($nmfcCode)
    {
        $this->NmfcCode = $nmfcCode;
        return $this;
    }
    
    /**
     * Returns NMFC Code for commodity.
     *
     * @return string
     */
    public function getNmfcCode()
    {
        return $this->NmfcCode;
    }
    
    /**
     * Indicates the kind of hazardous material content in this line item.
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityOptionType|string $hazardousMaterials
     * @return FreightShipmentLineItem
     */
    public function setHazardousMaterials($hazardousMaterials)
    {
        $this->HazardousMaterials = $hazardousMaterials;
        return $this;
    }
    
    /**
     * Returns Indicates the kind of hazardous material content in this line item.
     *
     * @return \FedEx\ShipService\SimpleType\HazardousCommodityOptionType|string
     */
    public function getHazardousMaterials()
    {
        return $this->HazardousMaterials;
    }
    
    /**
     * For printed reference per line item.
     *
     * @param string $purchaseOrderNumber
     * @return FreightShipmentLineItem
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->PurchaseOrderNumber = $purchaseOrderNumber;
        return $this;
    }
    
    /**
     * Returns For printed reference per line item.
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->PurchaseOrderNumber;
    }
    
    /**
     * Customer-provided description for this commodity or class line.
     *
     * @param string $description
     * @return FreightShipmentLineItem
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Customer-provided description for this commodity or class line.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Weight for this commodity or class line.
     *
     * @param Weight $weight
     * @return FreightShipmentLineItem
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Returns Weight for this commodity or class line.
     *
     * @return Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    
    /**
     * FED EX INTERNAL USE ONLY - Individual line item dimensions.
     *
     * @param Dimensions $dimensions
     * @return FreightShipmentLineItem
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Returns FED EX INTERNAL USE ONLY - Individual line item dimensions.
     *
     * @return Dimensions
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    
    /**
     * Volume (cubic measure) for this commodity or class line.
     *
     * @param Volume $volume
     * @return FreightShipmentLineItem
     */
    public function setVolume(Volume $volume)
    {
        $this->Volume = $volume;
        return $this;
    }
    
    /**
     * Returns Volume (cubic measure) for this commodity or class line.
     *
     * @return Volume
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    

    
}