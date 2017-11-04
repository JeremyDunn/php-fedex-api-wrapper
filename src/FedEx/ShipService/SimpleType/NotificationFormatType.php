<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * NotificationFormatType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class NotificationFormatType extends AbstractSimpleType
{
    const _HTML = 'HTML';
    const _TEXT = 'TEXT';
}
