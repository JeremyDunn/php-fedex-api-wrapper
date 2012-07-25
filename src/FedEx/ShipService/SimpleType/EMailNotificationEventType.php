<?php
namespace FedEx\ShipService\SimpleType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class EMailNotificationEventType
    extends AbstractSimpleType
{
    const _ON_DELIVERY = 'ON_DELIVERY';
    const _ON_EXCEPTION = 'ON_EXCEPTION';
    const _ON_SHIPMENT = 'ON_SHIPMENT';
    const _ON_TENDER = 'ON_TENDER';
}