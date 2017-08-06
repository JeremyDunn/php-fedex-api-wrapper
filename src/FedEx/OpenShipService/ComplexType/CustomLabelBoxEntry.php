<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Solid (filled) rectangular area on label.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property CustomLabelPosition $TopLeftCorner
 * @property CustomLabelPosition $BottomRightCorner

 */
class CustomLabelBoxEntry extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomLabelBoxEntry';

    /**
     * Set TopLeftCorner
     *
     * @param CustomLabelPosition $topLeftCorner
     * @return $this
     */
    public function setTopLeftCorner(CustomLabelPosition $topLeftCorner)
    {
        $this->values['TopLeftCorner'] = $topLeftCorner;
        return $this;
    }

    /**
     * Set BottomRightCorner
     *
     * @param CustomLabelPosition $bottomRightCorner
     * @return $this
     */
    public function setBottomRightCorner(CustomLabelPosition $bottomRightCorner)
    {
        $this->values['BottomRightCorner'] = $bottomRightCorner;
        return $this;
    }
}
