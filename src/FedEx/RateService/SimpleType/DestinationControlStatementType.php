<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DestinationControlStatementType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DestinationControlStatementType extends AbstractSimpleType
{
    const _DEPARTMENT_OF_COMMERCE = 'DEPARTMENT_OF_COMMERCE';
    const _DEPARTMENT_OF_STATE = 'DEPARTMENT_OF_STATE';
}
