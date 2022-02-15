<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for special equipment used in loading/unloading shipment.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property SpecialEquipmentLineItem[] $LineItems

 */
class SpecialEquipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SpecialEquipmentDetail';

    /**
     * Contains an entry for each type of special equipment used with shipment
     *
     * @param SpecialEquipmentLineItem[] $lineItems
     * @return $this
     */
    public function setLineItems(array $lineItems)
    {
        $this->values['LineItems'] = $lineItems;
        return $this;
    }
}
