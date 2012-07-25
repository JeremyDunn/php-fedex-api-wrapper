<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Identifies number and type of packaging units for hazardous commodities.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HazardousCommodityPackagingDetail
    extends AbstractComplexType
{
    protected $_name = 'HazardousCommodityPackagingDetail';

    /**
     * Number of units of the type below.
     *
     * @param nonNegativeInteger $Count
     * return HazardousCommodityPackagingDetail
     */
    public function setCount($count)
    {
        $this->Count = $count;
        return $this;
    }
    
    /**
     * Units in which the hazardous commodity is packaged.
     *
     * @param string $Units
     * return HazardousCommodityPackagingDetail
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}