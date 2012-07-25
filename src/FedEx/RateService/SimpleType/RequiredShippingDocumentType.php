<?php
namespace FedEx\RateService\SimpleType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RequiredShippingDocumentType
    extends AbstractSimpleType
{
    const _CANADIAN_B13A = 'CANADIAN_B13A';
    const _CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    const _COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    const _INTERNATIONAL_AIRWAY_BILL = 'INTERNATIONAL_AIRWAY_BILL';
    const _MAIL_SERVICE_AIRWAY_BILL = 'MAIL_SERVICE_AIRWAY_BILL';
    const _SHIPPERS_EXPORT_DECLARATION = 'SHIPPERS_EXPORT_DECLARATION';
}