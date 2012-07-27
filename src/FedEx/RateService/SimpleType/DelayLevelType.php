<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling )
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DelayLevelType
    extends AbstractSimpleType
{
    const _CITY = 'CITY';
    const _COUNTRY = 'COUNTRY';
    const _LOCATION = 'LOCATION';
    const _POSTAL_CODE = 'POSTAL_CODE';
    const _SERVICE_AREA = 'SERVICE_AREA';
    const _SERVICE_AREA_SPECIAL_SERVICE = 'SERVICE_AREA_SPECIAL_SERVICE';
    const _SPECIAL_SERVICE = 'SPECIAL_SERVICE';
}