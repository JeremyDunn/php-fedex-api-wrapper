<?php
namespace FedEx\LocationsService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the types of services supported by a FedEx location for redirect to hold.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class SupportedRedirectToHoldServiceType extends AbstractSimpleType
{
    const _FEDEX_EXPRESS = 'FEDEX_EXPRESS';
    const _FEDEX_GROUND = 'FEDEX_GROUND';
    const _FEDEX_GROUND_HOME_DELIVERY = 'FEDEX_GROUND_HOME_DELIVERY';
}
