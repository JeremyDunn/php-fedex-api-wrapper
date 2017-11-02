<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies how to return a shipping document to the caller.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class ShippingDocumentDispositionType extends AbstractSimpleType
{
    const _CONFIRMED = 'CONFIRMED';
    const _DEFERRED_QUEUED = 'DEFERRED_QUEUED';
    const _DEFERRED_RETURNED = 'DEFERRED_RETURNED';
    const _DEFERRED_STORED = 'DEFERRED_STORED';
    const _EMAILED = 'EMAILED';
    const _QUEUED = 'QUEUED';
    const _RETURNED = 'RETURNED';
    const _STORED = 'STORED';
}
