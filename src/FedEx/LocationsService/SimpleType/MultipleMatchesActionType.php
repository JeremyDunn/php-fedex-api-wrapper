<?php
namespace FedEx\LocationsService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * MultipleMatchesActionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class MultipleMatchesActionType extends AbstractSimpleType
{
    const _RETURN_ALL = 'RETURN_ALL';
    const _RETURN_ERROR = 'RETURN_ERROR';
    const _RETURN_FIRST = 'RETURN_FIRST';
}
