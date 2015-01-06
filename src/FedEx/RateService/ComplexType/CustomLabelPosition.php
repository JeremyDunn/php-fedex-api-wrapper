<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomLabelPosition
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomLabelPosition
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomLabelPosition';

    /**
     * Horizontal position, relative to left edge of custom area.
     *
     * @param nonNegativeInteger $x
     * @return CustomLabelPosition
     */
    public function setX($x)
    {
        $this->X = $x;
        return $this;
    }
    
    /**
     * Returns Horizontal position, relative to left edge of custom area.
     *
     * @return nonNegativeInteger
     */
    public function getX()
    {
        return $this->X;
    }
    
    /**
     * Vertical position, relative to top edge of custom area.
     *
     * @param nonNegativeInteger $y
     * @return CustomLabelPosition
     */
    public function setY($y)
    {
        $this->Y = $y;
        return $this;
    }
    
    /**
     * Returns Vertical position, relative to top edge of custom area.
     *
     * @return nonNegativeInteger
     */
    public function getY()
    {
        return $this->Y;
    }
    

    
}