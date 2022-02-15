<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the environment (level) for which an AuthenticationCredential is valid, and within which transactions are received.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class WebServiceEnvironment extends AbstractSimpleType
{
    const _PRODUCTION = 'PRODUCTION';
    const _TEST = 'TEST';
}
