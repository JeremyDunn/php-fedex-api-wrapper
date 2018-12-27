<?php
namespace FedEx\AddressValidationService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the address classification (business vs. residential)
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class FedExAddressClassificationType extends AbstractSimpleType
{
    const _BUSINESS = 'BUSINESS';
    const _MIXED = 'MIXED';
    const _RESIDENTIAL = 'RESIDENTIAL';
    const _UNKNOWN = 'UNKNOWN';
}
