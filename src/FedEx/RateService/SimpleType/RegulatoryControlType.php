<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RegulatoryControlType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RegulatoryControlType extends AbstractSimpleType
{
    const _EU_CIRCULATION = 'EU_CIRCULATION';
    const _FOOD_OR_PERISHABLE = 'FOOD_OR_PERISHABLE';
    const _NAFTA = 'NAFTA';
    const _NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION = 'NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION';
    const _NOT_IN_FREE_CIRCULATION = 'NOT_IN_FREE_CIRCULATION';
}
