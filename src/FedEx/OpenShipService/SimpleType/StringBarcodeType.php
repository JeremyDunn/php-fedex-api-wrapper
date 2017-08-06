<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * StringBarcodeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
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
