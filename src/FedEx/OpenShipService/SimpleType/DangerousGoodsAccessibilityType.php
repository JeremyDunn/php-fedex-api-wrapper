<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DangerousGoodsAccessibilityType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class DangerousGoodsAccessibilityType extends AbstractSimpleType
{
    const _ACCESSIBLE = 'ACCESSIBLE';
    const _INACCESSIBLE = 'INACCESSIBLE';
}
