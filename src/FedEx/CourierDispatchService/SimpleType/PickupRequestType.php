<?php
namespace FedEx\CourierDispatchService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Describes the relationship between the date on which a dispatch occurs and the date on which it is created (scheduled)
by means of a CourierDispatchRequest. FUTURE_DAY means that the dispatch date is later than the date on which it is created.
SAME_DAY means that the dispatch is to occur on the date on which it is created.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class PickupRequestType extends AbstractSimpleType
{
    const _FUTURE_DAY = 'FUTURE_DAY';
    const _SAME_DAY = 'SAME_DAY';
}
