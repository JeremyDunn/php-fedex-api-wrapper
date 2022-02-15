<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * SignatureOptionType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class SignatureOptionType extends AbstractSimpleType
{
    const _ADULT = 'ADULT';
    const _DIRECT = 'DIRECT';
    const _INDIRECT = 'INDIRECT';
    const _NO_SIGNATURE_REQUIRED = 'NO_SIGNATURE_REQUIRED';
    const _SERVICE_DEFAULT = 'SERVICE_DEFAULT';
}
