<?php
namespace FedEx\TrackService\SimpleType;

/**
 * Identifies the collection of units of measure that can be associated with a weight value.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class WeightUnits
    extends AbstractSimpleType
{
    const _KG = 'KG';
    const _LB = 'LB';
}