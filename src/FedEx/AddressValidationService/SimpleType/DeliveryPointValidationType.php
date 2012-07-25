<?php
namespace FedEx\AddressValidationService\SimpleType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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