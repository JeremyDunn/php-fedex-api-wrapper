<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomerImageUsageType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomerImageUsageType
    extends AbstractSimpleType
{
    const _LETTER_HEAD = 'LETTER_HEAD';
    const _SIGNATURE = 'SIGNATURE';
}