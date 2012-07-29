<?php
namespace FedEx\AddressValidationService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ResidentialStatusType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class ResidentialStatusType
    extends AbstractSimpleType
{
    const _UNDETERMINED = 'UNDETERMINED';
    const _BUSINESS = 'BUSINESS';
    const _RESIDENTIAL = 'RESIDENTIAL';
    const _INSUFFICIENT_DATA = 'INSUFFICIENT_DATA';
    const _UNAVAILABLE = 'UNAVAILABLE';
    const _NOT_APPLICABLE_TO_COUNTRY = 'NOT_APPLICABLE_TO_COUNTRY';
}