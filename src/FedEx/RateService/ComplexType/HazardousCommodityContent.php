<?php
namespace FedEx\RateService\ComplexType;

/**
 * Documents the kind and quantity of an individual hazardous commodity in a package.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class HazardousCommodityContent
    extends AbstractComplexType
{
    protected $_name = 'HazardousCommodityContent';

    /**
     * Identifies and describes an individual hazardous commodity.
     *
     * @param HazardousCommodityDescription $Description
     * return HazardousCommodityContent
     */
    public function setDescription(HazardousCommodityDescription $description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Specifies the amount of the commodity in alternate units.
     *
     * @param HazardousCommodityQuantityDetail $Quantity
     * return HazardousCommodityContent
     */
    public function setQuantity(HazardousCommodityQuantityDetail $quantity)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @param HazardousCommodityOptionDetail $Options
     * return HazardousCommodityContent
     */
    public function setOptions(HazardousCommodityOptionDetail $options)
    {
        $this->Options = $options;
        return $this;
    }
    

    
}