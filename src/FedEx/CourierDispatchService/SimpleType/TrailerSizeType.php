<?php
namespace FedEx\CourierDispatchService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the valid set of tractor tailer sizes supported by FedEx. This type is appropriate only for freight pickup requests.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class TrailerSizeType
    extends AbstractSimpleType
{
    const _TRAILER_28_FT = 'TRAILER_28_FT';
    const _TRAILER_48_FT = 'TRAILER_48_FT';
    const _TRAILER_53_FT = 'TRAILER_53_FT';
}