<?php
namespace FedEx\DGDSService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ValidateDangerousGoodsProcessingOptionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 */
class ValidateDangerousGoodsProcessingOptionType extends AbstractSimpleType
{
    const _BYPASS_PRODUCT_VALIDATION = 'BYPASS_PRODUCT_VALIDATION';
    const _BYPASS_TRACKING_NUMBER_VALIDATION = 'BYPASS_TRACKING_NUMBER_VALIDATION';
}
