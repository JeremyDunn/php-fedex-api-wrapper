<?php
namespace FedEx\CloseService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * NotificationSeverityType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class NotificationSeverityType extends AbstractSimpleType
{
    const _ERROR = 'ERROR';
    const _FAILURE = 'FAILURE';
    const _NOTE = 'NOTE';
    const _SUCCESS = 'SUCCESS';
    const _WARNING = 'WARNING';
}
