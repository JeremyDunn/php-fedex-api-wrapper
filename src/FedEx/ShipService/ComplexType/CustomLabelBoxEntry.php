<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Solid (filled) rectangular area on label.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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