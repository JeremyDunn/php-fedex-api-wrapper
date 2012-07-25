<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Identifies the type of service for a pending shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PendingShipmentType
    extends AbstractSimpleType
{
    const _EMAIL = 'EMAIL';
}