<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PackageSpecialServiceType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class PackageSpecialServiceType extends AbstractSimpleType
{
    const _ALCOHOL = 'ALCOHOL';
    const _APPOINTMENT_DELIVERY = 'APPOINTMENT_DELIVERY';
    const _BATTERY = 'BATTERY';
    const _COD = 'COD';
    const _DANGEROUS_GOODS = 'DANGEROUS_GOODS';
    const _DRY_ICE = 'DRY_ICE';
    const _NON_STANDARD_CONTAINER = 'NON_STANDARD_CONTAINER';
    const _PRIORITY_ALERT = 'PRIORITY_ALERT';
    const _SIGNATURE_OPTION = 'SIGNATURE_OPTION';
}
