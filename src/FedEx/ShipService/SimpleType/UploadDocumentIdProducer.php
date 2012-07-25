<?php
namespace FedEx\ShipService\SimpleType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class UploadDocumentIdProducer
    extends AbstractSimpleType
{
    const _CUSTOMER = 'CUSTOMER';
    const _FEDEX_CSHP = 'FEDEX_CSHP';
    const _FEDEX_GTM = 'FEDEX_GTM';
}