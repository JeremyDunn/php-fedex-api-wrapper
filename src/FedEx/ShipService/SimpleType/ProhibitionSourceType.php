<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ProhibitionSourceType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ProhibitionSourceType extends AbstractSimpleType
{
    const _FEDEX = 'FEDEX';
    const _GOVERNMENT = 'GOVERNMENT';
}
