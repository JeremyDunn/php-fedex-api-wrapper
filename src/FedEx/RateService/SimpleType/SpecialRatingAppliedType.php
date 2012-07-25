<?php
namespace FedEx\RateService\SimpleType;

/**
 * Indicates which special rating cases applied to this shipment.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class SpecialRatingAppliedType
    extends AbstractSimpleType
{
    const _FIXED_FUEL_SURCHARGE = 'FIXED_FUEL_SURCHARGE';
    const _IMPORT_PRICING = 'IMPORT_PRICING';
}