<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies how to organize all shipping documents of the same type.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class ShippingDocumentGroupingType extends AbstractSimpleType
{
    const _CONSOLIDATED_BY_DOCUMENT_TYPE = 'CONSOLIDATED_BY_DOCUMENT_TYPE';
    const _CONSOLIDATED_BY_IMAGE_TYPE = 'CONSOLIDATED_BY_IMAGE_TYPE';
    const _INDIVIDUAL = 'INDIVIDUAL';
}
