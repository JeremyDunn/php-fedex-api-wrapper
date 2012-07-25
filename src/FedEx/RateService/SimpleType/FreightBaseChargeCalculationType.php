<?php
namespace FedEx\RateService\SimpleType;

/**
 * Specifies the way in which base charges for a Freight shipment or shipment leg are calculated.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class FreightBaseChargeCalculationType
    extends AbstractSimpleType
{
    const _LINE_ITEMS = 'LINE_ITEMS';
    const _UNIT_PRICING = 'UNIT_PRICING';
}