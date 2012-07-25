<?php
namespace FedEx\RateService\SimpleType;

/**
 * The type of International shipment.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class InternationalDocumentContentType
    extends AbstractSimpleType
{
    const _DOCUMENTS_ONLY = 'DOCUMENTS_ONLY';
    const _NON_DOCUMENTS = 'NON_DOCUMENTS';
}