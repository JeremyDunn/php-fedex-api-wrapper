<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ProhibitionStatusType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ProhibitionStatusType extends AbstractSimpleType
{
    const _PROHIBITED = 'PROHIBITED';
    const _WAIVED = 'WAIVED';
}
