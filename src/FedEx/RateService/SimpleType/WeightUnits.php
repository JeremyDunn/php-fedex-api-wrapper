<?php
namespace FedEx\RateService\SimpleType;

/**
 * Identifies the unit of measure associated with a weight value. See WeightUnits for the list of valid enumerated values.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class WeightUnits
    extends AbstractSimpleType
{
    const _KG = 'KG';
    const _LB = 'LB';
}