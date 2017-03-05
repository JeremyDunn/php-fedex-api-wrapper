<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomLabelPosition
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property nonNegativeInteger $X
 * @property nonNegativeInteger $Y

 */
class CustomLabelPosition extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomLabelPosition';

    /**
     * Horizontal position, relative to left edge of custom area.
     *
     * @param nonNegativeInteger $x
     * @return $this
     */
    public function setX($x)
    {
        $this->values['X'] = $x;
        return $this;
    }

    /**
     * Vertical position, relative to top edge of custom area.
     *
     * @param nonNegativeInteger $y
     * @return $this
     */
    public function setY($y)
    {
        $this->values['Y'] = $y;
        return $this;
    }

    
}
