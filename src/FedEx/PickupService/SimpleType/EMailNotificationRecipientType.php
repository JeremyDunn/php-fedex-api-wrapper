<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Identifies the set of valid email notification recipient types. For SHIPPER, RECIPIENT and BROKER the email address asssociated with their definitions will be used, any email address sent with the email notification for these three email notification recipient types will be ignored.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EMailNotificationRecipientType
    extends AbstractSimpleType
{
    const _BROKER = 'BROKER';
    const _OTHER = 'OTHER';
    const _RECIPIENT = 'RECIPIENT';
    const _SHIPPER = 'SHIPPER';
    const _THIRD_PARTY = 'THIRD_PARTY';
}