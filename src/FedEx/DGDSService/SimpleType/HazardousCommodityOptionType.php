<?php
namespace FedEx\DGDSService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates which kind of hazardous content is being reported.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 */
class HazardousCommodityOptionType extends AbstractSimpleType
{
    const _BATTERY = 'BATTERY';
    const _HAZARDOUS_MATERIALS = 'HAZARDOUS_MATERIALS';
    const _LIMITED_QUANTITIES_COMMODITIES = 'LIMITED_QUANTITIES_COMMODITIES';
    const _ORM_D = 'ORM_D';
    const _REPORTABLE_QUANTITIES = 'REPORTABLE_QUANTITIES';
    const _SMALL_QUANTITY_EXCEPTION = 'SMALL_QUANTITY_EXCEPTION';
}
