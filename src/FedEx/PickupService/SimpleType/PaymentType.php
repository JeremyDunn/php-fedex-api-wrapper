<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Identifies the method of payment for a service.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PaymentType
    extends AbstractSimpleType
{
    const _ACCOUNT = 'ACCOUNT';
    const _CASH = 'CASH';
    const _COLLECT = 'COLLECT';
    const _CREDIT_CARD = 'CREDIT_CARD';
    const _RECIPIENT = 'RECIPIENT';
    const _SENDER = 'SENDER';
    const _THIRD_PARTY = 'THIRD_PARTY';
}