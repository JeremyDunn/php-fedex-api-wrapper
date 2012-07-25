<?php
namespace FedEx\RateService\SimpleType;

/**
 * Names for data elements / areas which may be suppressed from printing on labels.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class LabelMaskableDataType
    extends AbstractSimpleType
{
    const _CUSTOMS_VALUE = 'CUSTOMS_VALUE';
    const _DIMENSIONS = 'DIMENSIONS';
    const _DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER = 'DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER';
    const _FREIGHT_PAYOR_ACCOUNT_NUMBER = 'FREIGHT_PAYOR_ACCOUNT_NUMBER';
    const _PACKAGE_SEQUENCE_AND_COUNT = 'PACKAGE_SEQUENCE_AND_COUNT';
    const _SHIPPER_ACCOUNT_NUMBER = 'SHIPPER_ACCOUNT_NUMBER';
    const _SUPPLEMENTAL_LABEL_DOC_TAB = 'SUPPLEMENTAL_LABEL_DOC_TAB';
    const _TERMS_AND_CONDITIONS = 'TERMS_AND_CONDITIONS';
    const _TOTAL_WEIGHT = 'TOTAL_WEIGHT';
    const _TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER = 'TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER';
}