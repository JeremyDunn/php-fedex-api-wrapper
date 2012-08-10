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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'WeighingDetail';

    /**
     * Type of scale used
     *
     * @param \FedEx\Pickup\SimpleType\WeighingScaleType|string $type
     * return WeighingDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    

    
}