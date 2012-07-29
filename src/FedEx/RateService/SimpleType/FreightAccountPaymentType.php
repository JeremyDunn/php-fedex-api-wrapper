<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * FreightAccountPaymentType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FreightAccountPaymentType
    extends AbstractSimpleType
{
    const _COLLECT = 'COLLECT';
    const _PREPAID = 'PREPAID';
}