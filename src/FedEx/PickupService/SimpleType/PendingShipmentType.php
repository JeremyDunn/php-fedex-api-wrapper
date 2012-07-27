<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the type of service for a pending shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PendingShipmentType
    extends AbstractSimpleType
{
    const _EMAIL = 'EMAIL';
}