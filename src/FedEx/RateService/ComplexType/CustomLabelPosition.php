<?php
namespace FedEx\RateService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class CustomLabelPosition
    extends AbstractComplexType
{
    protected $_name = 'CustomLabelPosition';

    /**
     * Horizontal position, relative to left edge of custom area.
     *
     * @param nonNegativeInteger $X
     * return CustomLabelPosition
     */
    public function setX($x)
    {
        $this->X = $x;
        return $this;
    }
    
    /**
     * Vertical position, relative to top edge of custom area.
     *
     * @param nonNegativeInteger $Y
     * return CustomLabelPosition
     */
    public function setY($y)
    {
        $this->Y = $y;
        return $this;
    }
    

    
}