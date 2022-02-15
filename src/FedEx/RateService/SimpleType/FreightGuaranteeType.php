<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * FreightGuaranteeType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FreightGuaranteeType extends AbstractSimpleType
{
    const _GUARANTEED_DATE = 'GUARANTEED_DATE';
    const _GUARANTEED_MORNING = 'GUARANTEED_MORNING';
}
