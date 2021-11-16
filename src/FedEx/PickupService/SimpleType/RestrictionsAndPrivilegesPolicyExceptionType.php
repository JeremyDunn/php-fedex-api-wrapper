<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RestrictionsAndPrivilegesPolicyExceptionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class RestrictionsAndPrivilegesPolicyExceptionType extends AbstractSimpleType
{
    const _POLICIES_NOT_FOUND = 'POLICIES_NOT_FOUND';
    const _SERVICE_UNAVAILABLE = 'SERVICE_UNAVAILABLE';
}
