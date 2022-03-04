<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the type of rate quote
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class FreightRateQuoteType extends AbstractSimpleType
{
    const _AUTOMATED = 'AUTOMATED';
    const _MANUAL = 'MANUAL';
}
