<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates which kind of hazardous content (as defined by DOT) is being reported.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class HazardousCommodityOptionType
    extends AbstractSimpleType
{
    const _HAZARDOUS_MATERIALS = 'HAZARDOUS_MATERIALS';
    const _LITHIUM_BATTERY_EXCEPTION = 'LITHIUM_BATTERY_EXCEPTION';
    const _ORM_D = 'ORM_D';
    const _REPORTABLE_QUANTITIES = 'REPORTABLE_QUANTITIES';
    const _SMALL_QUANTITY_EXCEPTION = 'SMALL_QUANTITY_EXCEPTION';
}