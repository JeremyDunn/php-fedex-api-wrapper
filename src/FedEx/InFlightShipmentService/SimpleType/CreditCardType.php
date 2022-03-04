<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CreditCardType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class CreditCardType extends AbstractSimpleType
{
    const _AMEX = 'AMEX';
    const _DANKORT = 'DANKORT';
    const _DINERS = 'DINERS';
    const _DISCOVER = 'DISCOVER';
    const _JCB = 'JCB';
    const _MASTERCARD = 'MASTERCARD';
    const _VISA = 'VISA';
}
