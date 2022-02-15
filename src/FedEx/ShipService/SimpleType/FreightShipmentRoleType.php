<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates the role of the party submitting the transaction.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightShipmentRoleType extends AbstractSimpleType
{
    const _CONSIGNEE = 'CONSIGNEE';
    const _SHIPPER = 'SHIPPER';
}
