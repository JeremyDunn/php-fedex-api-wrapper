<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates the packaging type of the container used to package radioactive hazardous materials.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class RadioactiveContainerClassType extends AbstractSimpleType
{
    const _EXCEPTED_PACKAGE = 'EXCEPTED_PACKAGE';
    const _INDUSTRIAL_IP1 = 'INDUSTRIAL_IP1';
    const _INDUSTRIAL_IP2 = 'INDUSTRIAL_IP2';
    const _INDUSTRIAL_IP3 = 'INDUSTRIAL_IP3';
    const _TYPE_A = 'TYPE_A';
    const _TYPE_B_M = 'TYPE_B_M';
    const _TYPE_B_U = 'TYPE_B_U';
    const _TYPE_C = 'TYPE_C';
}
