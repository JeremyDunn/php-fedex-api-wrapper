<?php
namespace FedEx\AddressValidationService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies how different the address returned is from the address provided. This difference can be because the address is cannonialised to match the address specification standard set by USPS.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class OperationalAddressStateType extends AbstractSimpleType
{
    const _NORMALIZED = 'NORMALIZED';
    const _RAW = 'RAW';
    const _STANDARDIZED = 'STANDARDIZED';
}
