<?php
namespace FedEx\RateService\SimpleType;

/**
 * FOOD_OR_PERISHABLE is required by FDA/BTA; must be true for food/perishable items coming to US or PR from non-US/non-PR origin
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RegulatoryControlType
    extends AbstractSimpleType
{
    const _EU_CIRCULATION = 'EU_CIRCULATION';
    const _FOOD_OR_PERISHABLE = 'FOOD_OR_PERISHABLE';
    const _NAFTA = 'NAFTA';
}