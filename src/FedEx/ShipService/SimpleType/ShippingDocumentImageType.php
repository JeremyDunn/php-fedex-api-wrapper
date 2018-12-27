<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the image format used for a shipping document.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentImageType extends AbstractSimpleType
{
    const _DOC = 'DOC';
    const _EPL2 = 'EPL2';
    const _PDF = 'PDF';
    const _PNG = 'PNG';
    const _RTF = 'RTF';
    const _TEXT = 'TEXT';
    const _ZPLII = 'ZPLII';
}
