<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AsynchronousProcessingResultType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class AsynchronousProcessingResultType extends AbstractSimpleType
{
    const _ASYNCHRONOUSLY_PROCESSED = 'ASYNCHRONOUSLY_PROCESSED';
    const _SYNCHRONOUSLY_PROCESSED = 'SYNCHRONOUSLY_PROCESSED';
}
