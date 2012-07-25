<?php
namespace FedEx\CourierDispatchService\SimpleType;

/**
 * Identifies the set of severity values for a Notification.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class NotificationSeverityType
    extends AbstractSimpleType
{
    const _SUCCESS = 'SUCCESS';
    const _NOTE = 'NOTE';
    const _WARNING = 'WARNING';
    const _ERROR = 'ERROR';
    const _FAILURE = 'FAILURE';
}