<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * These values control the optional features of service that may be combined in a commitment/rate comparision transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ServiceOptionType
    extends AbstractSimpleType
{
    const _FREIGHT_GUARANTEE = 'FREIGHT_GUARANTEE';
    const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    const _SMART_POST_ALLOWED_INDICIA = 'SMART_POST_ALLOWED_INDICIA';
    const _SMART_POST_HUB_ID = 'SMART_POST_HUB_ID';
}