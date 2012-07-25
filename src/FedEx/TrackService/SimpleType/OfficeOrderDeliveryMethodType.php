<?php
namespace FedEx\TrackService\SimpleType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class OfficeOrderDeliveryMethodType
    extends AbstractSimpleType
{
    const _COURIER = 'COURIER';
    const _OTHER = 'OTHER';
    const _PICKUP = 'PICKUP';
    const _SHIPMENT = 'SHIPMENT';
}