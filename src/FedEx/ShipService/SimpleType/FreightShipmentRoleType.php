<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates the role of the party submitting the transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightShipmentRoleType extends AbstractSimpleType
{
    const _CONSIGNEE = 'CONSIGNEE';
    const _SHIPPER = 'SHIPPER';
}
