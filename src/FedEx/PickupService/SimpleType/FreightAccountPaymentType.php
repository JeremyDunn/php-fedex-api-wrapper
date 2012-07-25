<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Identifies the type of payment to be tendered for the pickup.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightAccountPaymentType
    extends AbstractSimpleType
{
    const _COLLECT = 'COLLECT';
    const _PREPAID = 'PREPAID';
}