<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Identification of the type of barcode (symbology) used on FedEx documents and labels.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class BarcodeSymbologyType
    extends AbstractSimpleType
{
    const _CODE128B = 'CODE128B';
    const _CODE128C = 'CODE128C';
    const _CODE39 = 'CODE39';
}