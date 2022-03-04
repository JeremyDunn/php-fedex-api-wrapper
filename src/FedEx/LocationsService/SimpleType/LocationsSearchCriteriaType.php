<?php
namespace FedEx\LocationsService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the criteria types that may be used to search for FedEx locations.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LocationsSearchCriteriaType extends AbstractSimpleType
{
    const _ADDRESS = 'ADDRESS';
    const _GEOGRAPHIC_COORDINATES = 'GEOGRAPHIC_COORDINATES';
    const _PHONE_NUMBER = 'PHONE_NUMBER';
}
