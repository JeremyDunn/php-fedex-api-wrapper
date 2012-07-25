<?php
namespace FedEx\LocatorService\ComplexType;

/**
 * The descriptive data for distance.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 */
class Distance
    extends AbstractComplexType
{
    protected $_name = 'Distance';

    /**
     * Identifies the value of distance from the point indicated by the search location (e.g. "12.5").
     *
     * @param decimal $Value
     * return Distance
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Identifies the unit of distance from the point indicated by the search location (e.g. "MI"). See DistanceUnits for list of returned values.
     *
     * @param DistanceUnits $Units
     * return Distance
     */
    public function setUnits(\FedEx\LocatorService\SimpleType\DistanceUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}