<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of an individual commodity or class of content in a shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * @param \FedEx\RateService\SimpleType\FreightClassType|string $freightClass
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
     * @return \FedEx\RateService\SimpleType\FreightClassType|string
     */
    public function getFreightClass()
    {
        return $this->FreightClass;
    }
    
    /**
     * Specification of handling-unit packaging for this commodity or class line.
     *
     * @param \FedEx\RateService\SimpleType\PhysicalPackagingType|string $packaging
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
     * @return \FedEx\RateService\SimpleType\PhysicalPackagingType|string
     */
    public function getPackaging()
    {
        return $this->Packaging;
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