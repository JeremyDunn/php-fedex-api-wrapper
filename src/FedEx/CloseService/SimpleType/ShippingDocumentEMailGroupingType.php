<?php
namespace FedEx\CloseService\SimpleType;

/**
 * Identifies the convention by which documents are to be grouped as e-mail attachments.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ShippingDocumentEMailGroupingType
    extends AbstractSimpleType
{
    const _BY_RECIPIENT = 'BY_RECIPIENT';
    const _NONE = 'NONE';
}