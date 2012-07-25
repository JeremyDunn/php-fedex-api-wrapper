<?php
namespace FedEx\CloseService\SimpleType;

/**
 * Specifies how to return a shipping document to the caller.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ShippingDocumentDispositionType
    extends AbstractSimpleType
{
    const _CONFIRMED = 'CONFIRMED';
    const _DEFERRED = 'DEFERRED';
    const _EMAILED = 'EMAILED';
    const _QUEUED = 'QUEUED';
    const _RETURNED = 'RETURNED';
    const _STORED = 'STORED';
}