<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * EMailNotificationRecipientType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class EMailNotificationRecipientType extends AbstractSimpleType
{
    const _BROKER = 'BROKER';
    const _OTHER = 'OTHER';
    const _RECIPIENT = 'RECIPIENT';
    const _SHIPPER = 'SHIPPER';
}
