<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * UploadDocumentProducerType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class UploadDocumentProducerType extends AbstractSimpleType
{
    const _CUSTOMER = 'CUSTOMER';
    const _FEDEX_CAFE = 'FEDEX_CAFE';
    const _FEDEX_CLS = 'FEDEX_CLS';
    const _FEDEX_FIDT = 'FEDEX_FIDT';
    const _FEDEX_FXRS = 'FEDEX_FXRS';
    const _FEDEX_GSMW = 'FEDEX_GSMW';
    const _FEDEX_GTM = 'FEDEX_GTM';
    const _OTHER = 'OTHER';
}
