<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShippingDocumentStorageDetailType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class ShippingDocumentStorageDetailType extends AbstractSimpleType
{
    const _ASYNC_SERVICE = 'ASYNC_SERVICE';
    const _LOCAL_FILE_SYSTEM = 'LOCAL_FILE_SYSTEM';
}
