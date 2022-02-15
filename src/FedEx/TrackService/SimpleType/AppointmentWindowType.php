<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The description that FedEx uses for a given appointment window.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class AppointmentWindowType extends AbstractSimpleType
{
    const _AFTERNOON = 'AFTERNOON';
    const _LATE_AFTERNOON = 'LATE_AFTERNOON';
    const _MID_DAY = 'MID_DAY';
    const _MORNING = 'MORNING';
}
