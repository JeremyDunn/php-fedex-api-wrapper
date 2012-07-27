<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * See instructions for NAFTA Certificate of Origin for code definitions.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class NaftaProducerDeterminationCode
    extends AbstractSimpleType
{
    const _NO_1 = 'NO_1';
    const _NO_2 = 'NO_2';
    const _NO_3 = 'NO_3';
    const _YES = 'YES';
}