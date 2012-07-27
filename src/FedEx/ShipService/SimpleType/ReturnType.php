<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The type of return shipment that is being requested.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ReturnType
    extends AbstractSimpleType
{
    const _FEDEX_TAG = 'FEDEX_TAG';
    const _PENDING = 'PENDING';
    const _PRINT_RETURN_LABEL = 'PRINT_RETURN_LABEL';
}