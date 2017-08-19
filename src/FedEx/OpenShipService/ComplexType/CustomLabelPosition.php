<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomLabelPosition
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property int $X
 * @property int $Y

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
     * @param int $x
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
     * @param int $y
     * @return $this
     */
    public function setY($y)
    {
        $this->values['Y'] = $y;
        return $this;
    }
}
