<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Each value in this enumeration specifies an action to be taken as part of the processing of a "create open shipment" transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class CreateOpenShipmentActionType extends AbstractSimpleType
{
    const _CONFIRM = 'CONFIRM';
    const _CREATE_PACKAGE = 'CREATE_PACKAGE';
    const _STRONG_VALIDATION = 'STRONG_VALIDATION';
    const _TRANSFER = 'TRANSFER';
    const _WEAK_VALIDATION = 'WEAK_VALIDATION';
}
