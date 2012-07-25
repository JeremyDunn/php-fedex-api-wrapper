<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Specifies the image format used for a shipping document.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentImageType
    extends AbstractSimpleType
{
    const _DOC = 'DOC';
    const _DPL = 'DPL';
    const _EPL2 = 'EPL2';
    const _PDF = 'PDF';
    const _PNG = 'PNG';
    const _RTF = 'RTF';
    const _TEXT = 'TEXT';
    const _ZPLII = 'ZPLII';
}