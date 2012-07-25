<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Specifies whether to confirm documents prior to processing a shipment with the ELECTRONIC_TRADE_DOCUMENTS special service.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EtdConfirmationType
    extends AbstractSimpleType
{
    const _CONFIRMED = 'CONFIRMED';
    const _DEFERRED = 'DEFERRED';
}