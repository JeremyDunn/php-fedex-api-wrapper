<?php
namespace FedEx\RateService\ComplexType;

/**
 * Solid (filled) rectangular area on label.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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