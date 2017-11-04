<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TinType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class TinType extends AbstractSimpleType
{
    const _BUSINESS_NATIONAL = 'BUSINESS_NATIONAL';
    const _BUSINESS_STATE = 'BUSINESS_STATE';
    const _PERSONAL_NATIONAL = 'PERSONAL_NATIONAL';
    const _PERSONAL_STATE = 'PERSONAL_STATE';
}
