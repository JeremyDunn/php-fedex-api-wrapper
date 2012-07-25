<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Specification for special equipment used in loading/unloading shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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