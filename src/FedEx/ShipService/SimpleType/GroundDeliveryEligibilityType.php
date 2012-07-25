<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Represents features of FedEx Ground delivery for which the shipment is eligible.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class GroundDeliveryEligibilityType
    extends AbstractSimpleType
{
    const _ALTERNATE_DAY_SERVICE = 'ALTERNATE_DAY_SERVICE';
    const _CARTAGE_AGENT_DELIVERY = 'CARTAGE_AGENT_DELIVERY';
    const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    const _USPS_DELIVERY = 'USPS_DELIVERY';
}