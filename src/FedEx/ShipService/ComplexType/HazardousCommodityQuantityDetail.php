<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Identifies amount and units for quantity of hazardous commodities.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HazardousCommodityQuantityDetail
    extends AbstractComplexType
{
    protected $_name = 'HazardousCommodityQuantityDetail';

    /**
     * Number of units of the type below.
     *
     * @param decimal $Amount
     * return HazardousCommodityQuantityDetail
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Units by which the hazardous commodity is measured.
     *
     * @param string $Units
     * return HazardousCommodityQuantityDetail
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}