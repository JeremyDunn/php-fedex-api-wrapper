<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Description of an individual commodity or class of content in a shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightShipmentLineItem
    extends AbstractComplexType
{
    protected $_name = 'FreightShipmentLineItem';

    /**
     * Freight class for this line item.
     *
     * @param FreightClassType $FreightClass
     * return FreightShipmentLineItem
     */
    public function setFreightClass(\FedEx\ShipService\SimpleType\FreightClassType $freightClass)
    {
        $this->FreightClass = $freightClass;
        return $this;
    }
    
    /**
     * FEDEX INTERNAL USE ONLY: for FedEx system that estimate freight class from customer-provided dimensions and weight.
     *
     * @param boolean $ClassProvidedByCustomer
     * return FreightShipmentLineItem
     */
    public function setClassProvidedByCustomer($classProvidedByCustomer)
    {
        $this->ClassProvidedByCustomer = $classProvidedByCustomer;
        return $this;
    }
    
    /**
     * Number of individual handling units to which this line applies. (NOTE: Total of line-item-level handling units may not balance to shipment-level total handling units.)
     *
     * @param nonNegativeInteger $HandlingUnits
     * return FreightShipmentLineItem
     */
    public function setHandlingUnits($handlingUnits)
    {
        $this->HandlingUnits = $handlingUnits;
        return $this;
    }
    
    /**
     * Specification of handling-unit packaging for this commodity or class line.
     *
     * @param PhysicalPackagingType $Packaging
     * return FreightShipmentLineItem
     */
    public function setPackaging(\FedEx\ShipService\SimpleType\PhysicalPackagingType $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Number of pieces for this commodity or class line.
     *
     * @param nonNegativeInteger $Pieces
     * return FreightShipmentLineItem
     */
    public function setPieces($pieces)
    {
        $this->Pieces = $pieces;
        return $this;
    }
    
    /**
     * NMFC Code for commodity.
     *
     * @param string $NmfcCode
     * return FreightShipmentLineItem
     */
    public function setNmfcCode($nmfcCode)
    {
        $this->NmfcCode = $nmfcCode;
        return $this;
    }
    
    /**
     * Indicates the kind of hazardous material content in this line item.
     *
     * @param HazardousCommodityOptionType $HazardousMaterials
     * return FreightShipmentLineItem
     */
    public function setHazardousMaterials(\FedEx\ShipService\SimpleType\HazardousCommodityOptionType $hazardousMaterials)
    {
        $this->HazardousMaterials = $hazardousMaterials;
        return $this;
    }
    
    /**
     * For printed reference per line item.
     *
     * @param string $BillOfLadingNumber
     * return FreightShipmentLineItem
     */
    public function setBillOfLadingNumber($billOfLadingNumber)
    {
        $this->BillOfLadingNumber = $billOfLadingNumber;
        return $this;
    }
    
    /**
     * For printed reference per line item.
     *
     * @param string $PurchaseOrderNumber
     * return FreightShipmentLineItem
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->PurchaseOrderNumber = $purchaseOrderNumber;
        return $this;
    }
    
    /**
     * Customer-provided description for this commodity or class line.
     *
     * @param string $Description
     * return FreightShipmentLineItem
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Weight for this commodity or class line.
     *
     * @param Weight $Weight
     * return FreightShipmentLineItem
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * FED EX INTERNAL USE ONLY - Individual line item dimensions.
     *
     * @param Dimensions $Dimensions
     * return FreightShipmentLineItem
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Volume (cubic measure) for this commodity or class line.
     *
     * @param Volume $Volume
     * return FreightShipmentLineItem
     */
    public function setVolume(Volume $volume)
    {
        $this->Volume = $volume;
        return $this;
    }
    

    
}