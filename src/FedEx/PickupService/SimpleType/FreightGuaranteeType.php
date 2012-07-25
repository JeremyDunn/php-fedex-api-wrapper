<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Identifies the type of Delivery Guarantee made.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightGuaranteeType
    extends AbstractSimpleType
{
    const _GUARANTEED_DATE = 'GUARANTEED_DATE';
    const _GUARANTEED_MORNING = 'GUARANTEED_MORNING';
}