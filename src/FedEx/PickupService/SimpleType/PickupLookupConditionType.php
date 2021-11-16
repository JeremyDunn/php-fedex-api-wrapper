<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PickupLookupConditionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupLookupConditionType extends AbstractSimpleType
{
    const _ACCOUNT_NUMBER = 'ACCOUNT_NUMBER';
    const _BEGIN_DATE = 'BEGIN_DATE';
    const _COMPANY_NAME = 'COMPANY_NAME';
    const _COUNTRY_CODE = 'COUNTRY_CODE';
    const _COUNTRY_RELATIONSHIP = 'COUNTRY_RELATIONSHIP';
    const _END_DATE = 'END_DATE';
    const _INTERNAL_SYSTEM_TYPE = 'INTERNAL_SYSTEM_TYPE';
    const _PICKUP_LOCATION_ID = 'PICKUP_LOCATION_ID';
    const _POSTAL_CODE = 'POSTAL_CODE';
    const _SERVICE_TYPE = 'SERVICE_TYPE';
}
