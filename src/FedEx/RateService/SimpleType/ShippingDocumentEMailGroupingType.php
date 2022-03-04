<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShippingDocumentEMailGroupingType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShippingDocumentEMailGroupingType extends AbstractSimpleType
{
    const _BY_RECIPIENT = 'BY_RECIPIENT';
    const _NONE = 'NONE';
}
