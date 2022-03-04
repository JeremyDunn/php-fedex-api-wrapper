<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies features of service requested for a Transborder Distribution shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class TransborderDistributionSpecialServiceType extends AbstractSimpleType
{
    const _FEDEX_LTL = 'FEDEX_LTL';
}
