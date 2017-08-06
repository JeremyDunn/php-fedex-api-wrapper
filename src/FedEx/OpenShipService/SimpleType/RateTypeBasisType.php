<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Select the type of rate from which the element is to be selected.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class RateTypeBasisType extends AbstractSimpleType
{
    const _ACCOUNT = 'ACCOUNT';
    const _LIST = 'LIST';
}
