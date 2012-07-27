<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the image format used for a shipping document.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShippingDocumentImageType
    extends AbstractSimpleType
{
    const _DPL = 'DPL';
    const _EPL2 = 'EPL2';
    const _PDF = 'PDF';
    const _PNG = 'PNG';
    const _ZPLII = 'ZPLII';
}