<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * SecondaryBarcodeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class SecondaryBarcodeType extends AbstractSimpleType
{
    const _COMMON_2D = 'COMMON_2D';
    const _NONE = 'NONE';
    const _SSCC_18 = 'SSCC_18';
    const _USPS = 'USPS';
}
