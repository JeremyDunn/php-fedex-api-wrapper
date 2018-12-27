<?php
namespace FedEx\CloseService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies how the shipment close requests are grouped.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class CloseGroupingType extends AbstractSimpleType
{
    const _MANIFEST_REFERENCE = 'MANIFEST_REFERENCE';
    const _SHIPPING_CYCLE = 'SHIPPING_CYCLE';
    const _TIME = 'TIME';
}
