<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Test for the Commercial Invoice. Note that Sold is not a valid Purpose for a Proforma Invoice.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PurposeOfShipmentType
    extends AbstractSimpleType
{
    const _GIFT = 'GIFT';
    const _NOT_SOLD = 'NOT_SOLD';
    const _PERSONAL_EFFECTS = 'PERSONAL_EFFECTS';
    const _REPAIR_AND_RETURN = 'REPAIR_AND_RETURN';
    const _SAMPLE = 'SAMPLE';
    const _SOLD = 'SOLD';
}