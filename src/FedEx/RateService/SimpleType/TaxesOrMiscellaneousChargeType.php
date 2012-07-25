<?php
namespace FedEx\RateService\SimpleType;

/**
 * Specifice the kind of tax or miscellaneous charge being reported on a Commercial Invoice.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class TaxesOrMiscellaneousChargeType
    extends AbstractSimpleType
{
    const _COMMISSIONS = 'COMMISSIONS';
    const _DISCOUNTS = 'DISCOUNTS';
    const _HANDLING_FEES = 'HANDLING_FEES';
    const _OTHER = 'OTHER';
    const _ROYALTIES_AND_LICENSE_FEES = 'ROYALTIES_AND_LICENSE_FEES';
    const _TAXES = 'TAXES';
}