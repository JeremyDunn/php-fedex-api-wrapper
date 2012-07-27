<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The format of the email
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class EMailNotificationFormatType
    extends AbstractSimpleType
{
    const _HTML = 'HTML';
    const _TEXT = 'TEXT';
    const _WIRELESS = 'WIRELESS';
}