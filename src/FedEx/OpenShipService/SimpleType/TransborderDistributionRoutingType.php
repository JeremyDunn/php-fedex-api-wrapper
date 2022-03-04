<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies how to route the transborder distribution CRNs to different distribution locations.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class TransborderDistributionRoutingType extends AbstractSimpleType
{
    const _BY_METER = 'BY_METER';
    const _BY_ORIGIN = 'BY_ORIGIN';
    const _CUSTOMER_SPECIFIED = 'CUSTOMER_SPECIFIED';
}
