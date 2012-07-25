<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Specifies a single type of weighing performed on a shipment
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class WeighingDetail
    extends AbstractComplexType
{
    protected $_name = 'WeighingDetail';

    /**
     * Type of scale used
     *
     * @param WeighingScaleType $Type
     * return WeighingDetail
     */
    public function setType(\FedEx\PickupService\SimpleType\WeighingScaleType $type)
    {
        $this->Type = $type;
        return $this;
    }
    

    
}