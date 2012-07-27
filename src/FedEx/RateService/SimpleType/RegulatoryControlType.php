<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * FOOD_OR_PERISHABLE is required by FDA/BTA; must be true for food/perishable items coming to US or PR from non-US/non-PR origin
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RegulatoryControlType
    extends AbstractSimpleType
{
    const _EU_CIRCULATION = 'EU_CIRCULATION';
    const _FOOD_OR_PERISHABLE = 'FOOD_OR_PERISHABLE';
    const _NAFTA = 'NAFTA';
}