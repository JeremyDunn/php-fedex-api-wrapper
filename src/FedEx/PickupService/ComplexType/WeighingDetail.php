<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies a single type of weighing performed on a shipment
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
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
    public function setType(\FedEx\Pickup\SimpleType\WeighingScaleType $type)
    {
        $this->Type = $type;
        return $this;
    }
    

    
}