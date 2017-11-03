<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * This identifies the document types that can be required. This can also indicate when either a COMMERCIAL_INVOICE or a PRO_FORMA_INVOICE is required through the COMMERCIAL_OR_PRO_FORMA_INVOICE option.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class RequiredDocumentType extends AbstractSimpleType
{
    const _AIR_WAYBILL = 'AIR_WAYBILL';
    const _CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    const _COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    const _COMMERCIAL_OR_PRO_FORMA_INVOICE = 'COMMERCIAL_OR_PRO_FORMA_INVOICE';
    const _NAFTA_CERTIFICATE_OF_ORIGIN = 'NAFTA_CERTIFICATE_OF_ORIGIN';
    const _PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
}
