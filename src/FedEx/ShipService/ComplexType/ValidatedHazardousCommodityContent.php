<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Documents the kind and quantity of an individual hazardous commodity in a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ValidatedHazardousCommodityContent
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ValidatedHazardousCommodityContent';

    /**
     * Identifies and describes an individual hazardous commodity.
     *
     * @param ValidatedHazardousCommodityDescription $description
     * @return ValidatedHazardousCommodityContent
     */
    public function setDescription(ValidatedHazardousCommodityDescription $description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Identifies and describes an individual hazardous commodity.
     *
     * @return ValidatedHazardousCommodityDescription
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Specifies the amount of the commodity in alternate units.
     *
     * @param HazardousCommodityQuantityDetail $quantity
     * @return ValidatedHazardousCommodityContent
     */
    public function setQuantity(HazardousCommodityQuantityDetail $quantity)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * Returns Specifies the amount of the commodity in alternate units.
     *
     * @return HazardousCommodityQuantityDetail
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @param HazardousCommodityOptionDetail $options
     * @return ValidatedHazardousCommodityContent
     */
    public function setOptions(HazardousCommodityOptionDetail $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns Customer-provided specifications for handling individual commodities.
     *
     * @return HazardousCommodityOptionDetail
     */
    public function getOptions()
    {
        return $this->Options;
    }
    

    
}