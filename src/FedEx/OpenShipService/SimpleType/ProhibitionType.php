<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ProhibitionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class ProhibitionType extends AbstractSimpleType
{
    const _COMMODITY = 'COMMODITY';
    const _COUNTRY = 'COUNTRY';
    const _DOCUMENT = 'DOCUMENT';
    const _SHIPMENT = 'SHIPMENT';
}
