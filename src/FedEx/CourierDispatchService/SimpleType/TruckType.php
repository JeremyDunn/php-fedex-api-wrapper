<?php
namespace FedEx\CourierDispatchService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the valid set of truck types supported by FedEx. This type is appropriate only for freight pickup requests.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class TruckType
    extends AbstractSimpleType
{
    const _DROP_TRAILER_AGREEMENT = 'DROP_TRAILER_AGREEMENT';
    const _LIFTGATE = 'LIFTGATE';
    const _TRACTOR_TRAILER_ACCESS = 'TRACTOR_TRAILER_ACCESS';
}