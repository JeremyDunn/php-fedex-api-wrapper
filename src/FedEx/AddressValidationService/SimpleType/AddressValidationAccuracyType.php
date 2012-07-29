<?php
namespace FedEx\AddressValidationService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AddressValidationAccuracyType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressValidationAccuracyType
    extends AbstractSimpleType
{
    const _EXACT = 'EXACT';
    const _TIGHT = 'TIGHT';
    const _MEDIUM = 'MEDIUM';
    const _LOOSE = 'LOOSE';
}