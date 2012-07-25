<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Names for data elements / areas which may be suppressed from printing on labels.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class LabelMaskableDataType
    extends AbstractSimpleType
{
    const _CUSTOMS_VALUE = 'CUSTOMS_VALUE';
    const _DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER = 'DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER';
    const _SHIPPER_ACCOUNT_NUMBER = 'SHIPPER_ACCOUNT_NUMBER';
    const _TERMS_AND_CONDITIONS = 'TERMS_AND_CONDITIONS';
    const _TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER = 'TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER';
}