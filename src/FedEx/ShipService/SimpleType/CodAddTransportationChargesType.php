<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Identifies what freight charges should be added to the COD collect amount.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CodAddTransportationChargesType
    extends AbstractSimpleType
{
    const _ADD_ACCOUNT_COD_SURCHARGE = 'ADD_ACCOUNT_COD_SURCHARGE';
    const _ADD_ACCOUNT_NET_CHARGE = 'ADD_ACCOUNT_NET_CHARGE';
    const _ADD_ACCOUNT_NET_FREIGHT = 'ADD_ACCOUNT_NET_FREIGHT';
    const _ADD_ACCOUNT_TOTAL_CUSTOMER_CHARGE = 'ADD_ACCOUNT_TOTAL_CUSTOMER_CHARGE';
    const _ADD_LIST_COD_SURCHARGE = 'ADD_LIST_COD_SURCHARGE';
    const _ADD_LIST_NET_CHARGE = 'ADD_LIST_NET_CHARGE';
    const _ADD_LIST_NET_FREIGHT = 'ADD_LIST_NET_FREIGHT';
    const _ADD_LIST_TOTAL_CUSTOMER_CHARGE = 'ADD_LIST_TOTAL_CUSTOMER_CHARGE';
    const _ADD_SUM_OF_ACCOUNT_NET_CHARGES = 'ADD_SUM_OF_ACCOUNT_NET_CHARGES';
    const _ADD_SUM_OF_ACCOUNT_NET_FREIGHT = 'ADD_SUM_OF_ACCOUNT_NET_FREIGHT';
    const _ADD_SUM_OF_LIST_NET_CHARGES = 'ADD_SUM_OF_LIST_NET_CHARGES';
    const _ADD_SUM_OF_LIST_NET_FREIGHT = 'ADD_SUM_OF_LIST_NET_FREIGHT';
}