<?php
namespace FedEx\Pickup\SimpleType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CreditCardType
    extends AbstractSimpleType
{
    const _AMEX = 'AMEX';
    const _DINERS = 'DINERS';
    const _DISCOVER = 'DISCOVER';
    const _MASTERCARD = 'MASTERCARD';
    const _VISA = 'VISA';
}