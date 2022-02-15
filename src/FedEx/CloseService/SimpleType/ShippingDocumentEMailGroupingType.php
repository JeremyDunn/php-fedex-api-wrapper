<?php
namespace FedEx\CloseService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShippingDocumentEMailGroupingType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ShippingDocumentEMailGroupingType extends AbstractSimpleType
{
    const _BY_RECIPIENT = 'BY_RECIPIENT';
    const _NONE = 'NONE';
}
