<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Specifies the usage of a single type of special equipment while loading/unloading a shipment
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class SpecialEquipmentLineItem
    extends AbstractComplexType
{
    protected $_name = 'SpecialEquipmentLineItem';

    /**
     * Type of equipment used
     *
     * @param SpecialEquipmentType $Type
     * return SpecialEquipmentLineItem
     */
    public function setType(\FedEx\PickupService\SimpleType\SpecialEquipmentType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Total amount of time the equipment was used
     *
     * @param duration $Duration
     * return SpecialEquipmentLineItem
     */
    public function setDuration(duration $duration)
    {
        $this->Duration = $duration;
        return $this;
    }
    

    
}