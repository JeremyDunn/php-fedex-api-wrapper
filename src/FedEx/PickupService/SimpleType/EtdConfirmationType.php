<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies whether to confirm documents prior to processing a shipment with the ELECTRONIC_TRADE_DOCUMENTS special service.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EtdConfirmationType extends AbstractSimpleType
{
    const _CONFIRMED = 'CONFIRMED';
    const _DEFERRED = 'DEFERRED';
}
