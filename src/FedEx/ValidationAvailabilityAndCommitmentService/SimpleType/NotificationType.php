<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * NotificationType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class NotificationType extends AbstractSimpleType
{
    const _EMAIL = 'EMAIL';
    const _FAX = 'FAX';
    const _SMS_TEXT_MESSAGE = 'SMS_TEXT_MESSAGE';
}
