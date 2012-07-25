<?php
namespace FedEx\CloseService\ComplexType;

/**
 * Represents a one-dimensional measurement in small units (e.g. suitable for measuring a package or document), contrasted with Distance, which represents a large one-dimensional measurement (e.g. distance between cities).
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class LinearMeasure
    extends AbstractComplexType
{
    protected $_name = 'LinearMeasure';

    /**
     * The numerical quantity of this measurement.
     *
     * @param decimal $Value
     * return LinearMeasure
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * The units for this measurement.
     *
     * @param LinearUnits $Units
     * return LinearMeasure
     */
    public function setUnits(\FedEx\CloseService\SimpleType\LinearUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}