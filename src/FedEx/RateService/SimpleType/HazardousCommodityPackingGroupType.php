<?php
namespace FedEx\RateService\SimpleType;

/**
 * Identifies DOT packing group for a hazardous commodity.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class HazardousCommodityPackingGroupType
    extends AbstractSimpleType
{
    const _I = 'I';
    const _II = 'II';
    const _III = 'III';
}