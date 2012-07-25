<?php
namespace FedEx\RateService\SimpleType;

/**
 * These values control the optional features of service that may be combined in a commitment/rate comparision transaction.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ServiceOptionType
    extends AbstractSimpleType
{
    const _FREIGHT_GUARANTEE = 'FREIGHT_GUARANTEE';
    const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    const _SMART_POST_ALLOWED_INDICIA = 'SMART_POST_ALLOWED_INDICIA';
    const _SMART_POST_HUB_ID = 'SMART_POST_HUB_ID';
}