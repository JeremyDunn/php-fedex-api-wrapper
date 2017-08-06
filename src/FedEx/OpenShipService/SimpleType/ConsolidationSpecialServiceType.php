<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ConsolidationSpecialServiceType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class ConsolidationSpecialServiceType extends AbstractSimpleType
{
    const _BROKER_SELECT_OPTION = 'BROKER_SELECT_OPTION';
    const _PRIORITY_ALERT = 'PRIORITY_ALERT';
    const _SATURDAY_PICKUP = 'SATURDAY_PICKUP';
}
