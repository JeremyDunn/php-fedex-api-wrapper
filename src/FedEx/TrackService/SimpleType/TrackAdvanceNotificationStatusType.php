<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackAdvanceNotificationStatusType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackAdvanceNotificationStatusType extends AbstractSimpleType
{
    const _BACK_ON_TRACK = 'BACK_ON_TRACK';
    const _FAIL = 'FAIL';
}
