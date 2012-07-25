<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Identifies the type of source for pickup request service.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PickupRequestSourceType
    extends AbstractSimpleType
{
    const _AUTOMATION = 'AUTOMATION';
    const _CUSTOMER_SERVICE = 'CUSTOMER_SERVICE';
}