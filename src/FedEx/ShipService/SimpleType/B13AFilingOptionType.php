<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * 
            Specifies which filing option is being exercised by the customer.
            Required for non-document shipments originating in Canada destined for any country other than Canada, the United States, Puerto Rico or the U.S. Virgin Islands.
          
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class B13AFilingOptionType
    extends AbstractSimpleType
{
    const _FEDEX_TO_STAMP = 'FEDEX_TO_STAMP';
    const _FILED_ELECTRONICALLY = 'FILED_ELECTRONICALLY';
    const _MANUALLY_ATTACHED = 'MANUALLY_ATTACHED';
    const _NOT_REQUIRED = 'NOT_REQUIRED';
    const _SUMMARY_REPORTING = 'SUMMARY_REPORTING';
}