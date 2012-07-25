<?php
namespace FedEx\RateService\SimpleType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class SecondaryBarcodeType
    extends AbstractSimpleType
{
    const _COMMON_2D = 'COMMON_2D';
    const _NONE = 'NONE';
    const _SSCC_18 = 'SSCC_18';
    const _USPS = 'USPS';
}