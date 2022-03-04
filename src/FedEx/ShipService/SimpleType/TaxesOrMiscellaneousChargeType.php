<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifice the kind of tax or miscellaneous charge being reported on a Commercial Invoice.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class TaxesOrMiscellaneousChargeType extends AbstractSimpleType
{
    const _COMMISSIONS = 'COMMISSIONS';
    const _DISCOUNTS = 'DISCOUNTS';
    const _HANDLING_FEES = 'HANDLING_FEES';
    const _OTHER = 'OTHER';
    const _ROYALTIES_AND_LICENSE_FEES = 'ROYALTIES_AND_LICENSE_FEES';
    const _TAXES = 'TAXES';
}
