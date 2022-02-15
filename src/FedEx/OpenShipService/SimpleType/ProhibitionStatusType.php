<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ProhibitionStatusType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class ProhibitionStatusType extends AbstractSimpleType
{
    const _PROHIBITED = 'PROHIBITED';
    const _WAIVED = 'WAIVED';
}
