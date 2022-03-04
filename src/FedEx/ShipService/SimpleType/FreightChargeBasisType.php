<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * FreightChargeBasisType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightChargeBasisType extends AbstractSimpleType
{
    const _CWT = 'CWT';
    const _FLAT = 'FLAT';
    const _MINIMUM = 'MINIMUM';
}
