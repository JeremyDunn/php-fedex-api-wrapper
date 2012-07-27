<?php
namespace FedEx\CourierDispatchService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the collection of linear units of measure for a package dimension.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class LinearUnits
    extends AbstractSimpleType
{
    const _CM = 'CM';
    const _IN = 'IN';
}