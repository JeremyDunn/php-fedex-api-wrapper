<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Solid (filled) rectangular area on label.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomLabelBoxEntry
    extends AbstractComplexType
{
    protected $_name = 'CustomLabelBoxEntry';

    /**
     * 
     *
     * @param CustomLabelPosition $TopLeftCorner
     * return CustomLabelBoxEntry
     */
    public function setTopLeftCorner(CustomLabelPosition $topLeftCorner)
    {
        $this->TopLeftCorner = $topLeftCorner;
        return $this;
    }
    
    /**
     * 
     *
     * @param CustomLabelPosition $BottomRightCorner
     * return CustomLabelBoxEntry
     */
    public function setBottomRightCorner(CustomLabelPosition $bottomRightCorner)
    {
        $this->BottomRightCorner = $bottomRightCorner;
        return $this;
    }
    

    
}