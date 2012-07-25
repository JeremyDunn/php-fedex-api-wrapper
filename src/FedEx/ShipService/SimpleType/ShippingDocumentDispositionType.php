<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Specifies how to return a shipping document to the caller.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentDispositionType
    extends AbstractSimpleType
{
    const _CONFIRMED = 'CONFIRMED';
    const _DEFERRED_RETURNED = 'DEFERRED_RETURNED';
    const _DEFERRED_STORED = 'DEFERRED_STORED';
    const _EMAILED = 'EMAILED';
    const _QUEUED = 'QUEUED';
    const _RETURNED = 'RETURNED';
    const _STORED = 'STORED';
}