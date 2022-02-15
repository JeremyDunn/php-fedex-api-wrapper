<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShippingDocumentEMailGroupingType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentEMailGroupingType extends AbstractSimpleType
{
    const _BY_RECIPIENT = 'BY_RECIPIENT';
    const _NONE = 'NONE';
}
