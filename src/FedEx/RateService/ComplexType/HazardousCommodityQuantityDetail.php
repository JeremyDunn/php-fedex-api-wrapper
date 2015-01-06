<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies amount and units for quantity of hazardous commodities.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class HazardousCommodityQuantityDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HazardousCommodityQuantityDetail';

    /**
     * Number of units of the type below.
     *
     * @param decimal $amount
     * @return HazardousCommodityQuantityDetail
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Returns Number of units of the type below.
     *
     * @return decimal
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    
    /**
     * Units by which the hazardous commodity is measured.
     *
     * @param string $units
     * @return HazardousCommodityQuantityDetail
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Returns Units by which the hazardous commodity is measured.
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->Units;
    }
    

    
}