<?php
namespace FedEx\DGLDService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * NotificationSeverityType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  List Dangerous Goods Service
 */
class NotificationSeverityType extends AbstractSimpleType
{
    const _ERROR = 'ERROR';
    const _FAILURE = 'FAILURE';
    const _NOTE = 'NOTE';
    const _SUCCESS = 'SUCCESS';
    const _WARNING = 'WARNING';
}
