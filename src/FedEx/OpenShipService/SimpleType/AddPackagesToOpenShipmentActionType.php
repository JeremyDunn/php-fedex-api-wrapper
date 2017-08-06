<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Each value in this enumeration specifies an action to be taken as part of the processing of an "add package to open shipment" transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class AddPackagesToOpenShipmentActionType extends AbstractSimpleType
{
    const _STRONG_VALIDATION = 'STRONG_VALIDATION';
    const _WEAK_VALIDATION = 'WEAK_VALIDATION';
}
