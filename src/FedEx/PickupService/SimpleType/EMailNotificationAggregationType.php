<?php
namespace FedEx\Pickup\SimpleType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EMailNotificationAggregationType
    extends AbstractSimpleType
{
    const _PER_PACKAGE = 'PER_PACKAGE';
    const _PER_SHIPMENT = 'PER_SHIPMENT';
}