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
    protected $_name = 'FreightShipmentLineItem';

    /**
     * Freight class for this line item.
     *
     * @param FreightClassType $FreightClass
     * return FreightShipmentLineItem
     */
    public function setFreightClass(\FedEx\RateService\SimpleType\FreightClassType $freightClass)
    {
        $this->FreightClass = $freightClass;
        return $this;
    }
    
    /**
     * Specification of handling-unit packaging for this commodity or class line.
     *
     * @param PhysicalPackagingType $Packaging
     * return FreightShipmentLineItem
     */
    public function setPackaging(\FedEx\RateService\SimpleType\PhysicalPackagingType $packaging)
    {
        $this->Packaging = $packaging;
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