<?php
namespace FedEx\RateService\SimpleType;

/**
 * The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling )
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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