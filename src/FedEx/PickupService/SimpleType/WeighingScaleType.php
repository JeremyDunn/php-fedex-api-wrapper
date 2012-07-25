<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Identifies types of scales used in weighing Freight shipments
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class WeighingScaleType
    extends AbstractSimpleType
{
    const _FEDEX_SCALE = 'FEDEX_SCALE';
    const _PUBLIC_SCALE = 'PUBLIC_SCALE';
}