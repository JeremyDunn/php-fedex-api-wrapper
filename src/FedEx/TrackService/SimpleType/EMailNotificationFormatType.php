<?php
namespace FedEx\TrackService\SimpleType;

/**
 * The format of the email
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class EMailNotificationFormatType
    extends AbstractSimpleType
{
    const _HTML = 'HTML';
    const _TEXT = 'TEXT';
    const _WIRELESS = 'WIRELESS';
}