<?php
namespace FedEx\CourierDispatchService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the set of severity values for a Notification.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class NotificationSeverityType extends AbstractSimpleType
{
    const _SUCCESS = 'SUCCESS';
    const _NOTE = 'NOTE';
    const _WARNING = 'WARNING';
    const _ERROR = 'ERROR';
    const _FAILURE = 'FAILURE';
}
