<?php
namespace FedEx\ReturnTagService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the Express Tag Service availability.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
 */
class ExpressTagAvailabilityType
    extends AbstractSimpleType
{
    const _NEXT_DAY_AVAILABLE = 'NEXT_DAY_AVAILABLE';
    const _SAME_DAY_AND_NEXT_DAY_AVAILABLE = 'SAME_DAY_AND_NEXT_DAY_AVAILABLE';
}