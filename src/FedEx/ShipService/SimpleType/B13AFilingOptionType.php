<?php
namespace FedEx\ShipService\SimpleType;

/**
 * 
            Specifies which filing option is being exercised by the customer.
            Required for non-document shipments originating in Canada destined for any country other than Canada, the United States, Puerto Rico or the U.S. Virgin Islands.
          
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class B13AFilingOptionType
    extends AbstractSimpleType
{
    const _FILED_ELECTRONICALLY = 'FILED_ELECTRONICALLY';
    const _MANUALLY_ATTACHED = 'MANUALLY_ATTACHED';
    const _NOT_REQUIRED = 'NOT_REQUIRED';
    const _SUMMARY_REPORTING = 'SUMMARY_REPORTING';
}