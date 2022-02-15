<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * StringBarcodeType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class StringBarcodeType extends AbstractSimpleType
{
    const _ADDRESS = 'ADDRESS';
    const _ASTRA = 'ASTRA';
    const _FEDEX_1D = 'FEDEX_1D';
    const _GROUND = 'GROUND';
    const _POSTAL = 'POSTAL';
    const _USPS = 'USPS';
}
