<?php
namespace FedEx\AddressValidationService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DeliveryPointValidationType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class DeliveryPointValidationType
    extends AbstractSimpleType
{
    const _CONFIRMED = 'CONFIRMED';
    const _UNCONFIRMED = 'UNCONFIRMED';
    const _UNAVAILABLE = 'UNAVAILABLE';
}