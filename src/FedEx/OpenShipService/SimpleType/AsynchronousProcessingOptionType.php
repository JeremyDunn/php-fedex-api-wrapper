<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AsynchronousProcessingOptionType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class AsynchronousProcessingOptionType extends AbstractSimpleType
{
    const _ALLOW_ASYNCHRONOUS = 'ALLOW_ASYNCHRONOUS';
    const _ASYNCHRONOUS_ONLY = 'ASYNCHRONOUS_ONLY';
    const _SYNCHRONOUS_ONLY = 'SYNCHRONOUS_ONLY';
}
