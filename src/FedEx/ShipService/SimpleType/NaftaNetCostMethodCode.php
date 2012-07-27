<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Net cost method used.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class NaftaNetCostMethodCode
    extends AbstractSimpleType
{
    const _NC = 'NC';
    const _NO = 'NO';
}