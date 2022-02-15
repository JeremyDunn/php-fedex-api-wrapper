<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * EMailNotificationRecipientType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class EMailNotificationRecipientType extends AbstractSimpleType
{
    const _BROKER = 'BROKER';
    const _OTHER = 'OTHER';
    const _RECIPIENT = 'RECIPIENT';
    const _SHIPPER = 'SHIPPER';
    const _THIRD_PARTY = 'THIRD_PARTY';
}
