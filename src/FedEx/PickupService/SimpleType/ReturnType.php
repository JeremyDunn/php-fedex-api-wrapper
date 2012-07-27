<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The type of return shipment that is being requested.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ReturnType
    extends AbstractSimpleType
{
    const _FEDEX_TAG = 'FEDEX_TAG';
    const _NET_RETURN = 'NET_RETURN';
    const _PENDING = 'PENDING';
    const _PRINT_RETURN_LABEL = 'PRINT_RETURN_LABEL';
    const _VOICE_CALL_TAG = 'VOICE_CALL_TAG';
}