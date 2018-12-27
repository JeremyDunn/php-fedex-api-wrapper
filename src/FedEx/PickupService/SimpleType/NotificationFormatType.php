<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * NotificationFormatType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class NotificationFormatType extends AbstractSimpleType
{
    const _HTML = 'HTML';
    const _TEXT = 'TEXT';
}
