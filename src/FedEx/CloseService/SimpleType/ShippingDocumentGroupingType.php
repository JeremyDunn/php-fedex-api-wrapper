<?php
namespace FedEx\CloseService\SimpleType;

/**
 * Specifies how to organize all shipping documents of the same type.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ShippingDocumentGroupingType
    extends AbstractSimpleType
{
    const _CONSOLIDATED_BY_DOCUMENT_TYPE = 'CONSOLIDATED_BY_DOCUMENT_TYPE';
    const _INDIVIDUAL = 'INDIVIDUAL';
}