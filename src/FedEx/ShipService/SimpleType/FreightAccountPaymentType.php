<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * FreightAccountPaymentType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightAccountPaymentType
    extends AbstractSimpleType
{
    const _COLLECT = 'COLLECT';
    const _PREPAID = 'PREPAID';
}