<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Special circumstance rating used for this shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class SpecialRatingAppliedType
    extends AbstractSimpleType
{
    const _FIXED_FUEL_SURCHARGE = 'FIXED_FUEL_SURCHARGE';
    const _IMPORT_PRICING = 'IMPORT_PRICING';
}