<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Special circumstance rating used for this shipment.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class SpecialRatingAppliedType
    extends AbstractSimpleType
{
    const _FIXED_FUEL_SURCHARGE = 'FIXED_FUEL_SURCHARGE';
    const _IMPORT_PRICING = 'IMPORT_PRICING';
}