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
class UploadDocumentProducerType
    extends AbstractSimpleType
{
    const _CUSTOMER = 'CUSTOMER';
    const _FEDEX_CLS = 'FEDEX_CLS';
    const _FEDEX_GTM = 'FEDEX_GTM';
    const _OTHER = 'OTHER';
}