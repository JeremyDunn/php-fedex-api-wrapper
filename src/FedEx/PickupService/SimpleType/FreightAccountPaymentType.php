<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the type of payment to be tendered for the pickup.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightAccountPaymentType
    extends AbstractSimpleType
{
    const _COLLECT = 'COLLECT';
    const _PREPAID = 'PREPAID';
}