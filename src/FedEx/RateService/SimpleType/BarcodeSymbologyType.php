<?php
namespace FedEx\RateService\SimpleType;

/**
 * Identification of the type of barcode (symbology) used on FedEx documents and labels.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class BarcodeSymbologyType
    extends AbstractSimpleType
{
    const _CODABAR = 'CODABAR';
    const _CODE128 = 'CODE128';
    const _CODE128B = 'CODE128B';
    const _CODE128C = 'CODE128C';
    const _CODE39 = 'CODE39';
    const _CODE93 = 'CODE93';
    const _I2OF5 = 'I2OF5';
    const _MANUAL = 'MANUAL';
    const _PDF417 = 'PDF417';
    const _POSTNET = 'POSTNET';
    const _UCC128 = 'UCC128';
}