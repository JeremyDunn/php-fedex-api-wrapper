<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the image format used for a shipping document.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class ShippingDocumentImageType extends AbstractSimpleType
{
    const _DIB = 'DIB';
    const _DOC = 'DOC';
    const _DPL = 'DPL';
    const _EPL2 = 'EPL2';
    const _GIF = 'GIF';
    const _PDF = 'PDF';
    const _PNG = 'PNG';
    const _RTF = 'RTF';
    const _TEXT = 'TEXT';
    const _ZPLII = 'ZPLII';
}
