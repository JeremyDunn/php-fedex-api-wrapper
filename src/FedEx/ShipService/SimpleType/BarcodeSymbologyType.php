<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identification of the type of barcode (symbology) used on FedEx documents and labels.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
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