<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for special equipment used in loading/unloading shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class SpecialEquipmentDetail
    extends AbstractComplexType
{
    protected $_name = 'SpecialEquipmentDetail';

    /**
     * Contains an entry for each type of special equipment used with shipment
     *
     * @param array[SpecialEquipmentLineItem] $LineItems
     * return SpecialEquipmentDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    

    
}