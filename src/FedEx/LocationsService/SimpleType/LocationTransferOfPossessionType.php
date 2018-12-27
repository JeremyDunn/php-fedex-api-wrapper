<?php
namespace FedEx\LocationsService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * LocationTransferOfPossessionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LocationTransferOfPossessionType extends AbstractSimpleType
{
    const _DROPOFF = 'DROPOFF';
    const _HOLD_AT_LOCATION = 'HOLD_AT_LOCATION';
    const _REDIRECT_TO_HOLD_AT_LOCATION = 'REDIRECT_TO_HOLD_AT_LOCATION';
}
