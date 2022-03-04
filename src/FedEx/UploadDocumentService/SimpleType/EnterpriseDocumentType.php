<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * This identifies some of the document types recognized by Enterprise Document Management Service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class EnterpriseDocumentType extends AbstractSimpleType
{
    const _AIR_WAYBILL = 'AIR_WAYBILL';
    const _CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    const _COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    const _PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
    const _USMCA_CERTIFICATION_OF_ORIGIN = 'USMCA_CERTIFICATION_OF_ORIGIN';
    const _USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN = 'USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN';
}
