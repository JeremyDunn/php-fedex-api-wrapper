<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the type of rate quote
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FreightRateQuoteType extends AbstractSimpleType
{
    const _AUTOMATED = 'AUTOMATED';
    const _MANUAL = 'MANUAL';
}
