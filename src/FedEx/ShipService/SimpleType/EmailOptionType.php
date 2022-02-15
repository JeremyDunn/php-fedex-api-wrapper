<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * EmailOptionType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class EmailOptionType extends AbstractSimpleType
{
    const _SUPPRESS_ACCESS_EMAILS = 'SUPPRESS_ACCESS_EMAILS';
    const _SUPPRESS_ADDITIONAL_LANGUAGES = 'SUPPRESS_ADDITIONAL_LANGUAGES';
}
