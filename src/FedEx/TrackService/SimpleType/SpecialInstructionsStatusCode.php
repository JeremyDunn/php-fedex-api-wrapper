<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * SpecialInstructionsStatusCode
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class SpecialInstructionsStatusCode extends AbstractSimpleType
{
    const _ACCEPTED = 'ACCEPTED';
    const _CANCELLED = 'CANCELLED';
    const _DENIED = 'DENIED';
    const _HELD = 'HELD';
    const _MODIFIED = 'MODIFIED';
    const _RELINQUISHED = 'RELINQUISHED';
    const _REQUESTED = 'REQUESTED';
    const _SET = 'SET';
}
