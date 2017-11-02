<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the convention by which file names are constructed for STORED or DEFERRED documents.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class ShippingDocumentNamingType extends AbstractSimpleType
{
    const _FAST = 'FAST';
    const _LEGACY_FXRS = 'LEGACY_FXRS';
}
