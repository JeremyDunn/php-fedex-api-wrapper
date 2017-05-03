<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PaymentType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PaymentType extends AbstractSimpleType
{
    const _ACCOUNT = 'ACCOUNT';
    const _COLLECT = 'COLLECT';
    const _RECIPIENT = 'RECIPIENT';
    const _SENDER = 'SENDER';
    const _THIRD_PARTY = 'THIRD_PARTY';
}
