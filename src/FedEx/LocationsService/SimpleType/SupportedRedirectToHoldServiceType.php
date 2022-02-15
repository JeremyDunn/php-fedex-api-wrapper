<?php
namespace FedEx\LocationsService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DEPRECATED as of July 2017.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class SupportedRedirectToHoldServiceType extends AbstractSimpleType
{
    const _FEDEX_EXPRESS = 'FEDEX_EXPRESS';
    const _FEDEX_GROUND = 'FEDEX_GROUND';
    const _FEDEX_GROUND_HOME_DELIVERY = 'FEDEX_GROUND_HOME_DELIVERY';
}
