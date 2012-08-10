<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the usage of a single type of special equipment while loading/unloading a shipment
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class SpecialEquipmentLineItem
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SpecialEquipmentLineItem';

    /**
     * Type of equipment used
     *
     * @param \FedEx\Pickup\SimpleType\SpecialEquipmentType|string $type
     * return SpecialEquipmentLineItem
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Total amount of time the equipment was used
     *
     * @param duration $duration
     * return SpecialEquipmentLineItem
     */
    public function setDuration(duration $duration)
    {
        $this->Duration = $duration;
        return $this;
    }
    

    
}