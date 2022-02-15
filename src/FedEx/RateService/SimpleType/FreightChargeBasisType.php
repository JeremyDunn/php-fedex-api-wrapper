<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * FreightChargeBasisType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FreightChargeBasisType extends AbstractSimpleType
{
    const _CWT = 'CWT';
    const _FLAT = 'FLAT';
    const _MINIMUM = 'MINIMUM';
}
