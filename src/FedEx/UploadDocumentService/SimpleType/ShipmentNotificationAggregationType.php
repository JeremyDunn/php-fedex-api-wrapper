<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipmentNotificationAggregationType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class ShipmentNotificationAggregationType extends AbstractSimpleType
{
    const _PER_PACKAGE = 'PER_PACKAGE';
    const _PER_SHIPMENT = 'PER_SHIPMENT';
}
