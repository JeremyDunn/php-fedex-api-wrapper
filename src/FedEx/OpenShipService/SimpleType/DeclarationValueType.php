<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DeclarationValueType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class DeclarationValueType extends AbstractSimpleType
{
    const _CUSTOMS_VALUE = 'CUSTOMS_VALUE';
    const _INSURED_VALUE = 'INSURED_VALUE';
}
