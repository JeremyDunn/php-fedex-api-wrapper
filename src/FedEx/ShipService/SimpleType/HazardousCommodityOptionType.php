<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Indicates which kind of hazardous content (as defined by DOT) is being reported.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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