<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies number and type of packaging units for hazardous commodities.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class HazardousCommodityPackagingDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HazardousCommodityPackagingDetail';

    /**
     * Number of units of the type below.
     *
     * @param nonNegativeInteger $count
     * @return HazardousCommodityPackagingDetail
     */
    public function setCount($count)
    {
        $this->Count = $count;
        return $this;
    }
    
    /**
     * Returns Number of units of the type below.
     *
     * @return nonNegativeInteger
     */
    public function getCount()
    {
        return $this->Count;
    }
    
    /**
     * Units in which the hazardous commodity is packaged.
     *
     * @param string $units
     * @return HazardousCommodityPackagingDetail
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Returns Units in which the hazardous commodity is packaged.
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->Units;
    }
    

    
}