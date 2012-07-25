<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Identifies the unit of measure associated with a weight value. See the list of enumerated types for valid values.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class WeightUnits
    extends AbstractSimpleType
{
    const _KG = 'KG';
    const _LB = 'LB';
}