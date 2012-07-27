<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the type of Delivery Guarantee made.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightGuaranteeType
    extends AbstractSimpleType
{
    const _GUARANTEED_DATE = 'GUARANTEED_DATE';
    const _GUARANTEED_MORNING = 'GUARANTEED_MORNING';
}