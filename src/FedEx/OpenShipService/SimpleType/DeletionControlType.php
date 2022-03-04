<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the type of deletion to be performed on a shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class DeletionControlType extends AbstractSimpleType
{
    const _DELETE_ALL_PACKAGES = 'DELETE_ALL_PACKAGES';
    const _DELETE_ENTIRE_CONSOLIDATION = 'DELETE_ENTIRE_CONSOLIDATION';
    const _DELETE_ONE_PACKAGE = 'DELETE_ONE_PACKAGE';
    const _LEGACY = 'LEGACY';
}
