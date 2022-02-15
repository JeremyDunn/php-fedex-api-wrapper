<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * NotificationSeverityType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class NotificationSeverityType extends AbstractSimpleType
{
    const _ERROR = 'ERROR';
    const _FAILURE = 'FAILURE';
    const _NOTE = 'NOTE';
    const _SUCCESS = 'SUCCESS';
    const _WARNING = 'WARNING';
}
