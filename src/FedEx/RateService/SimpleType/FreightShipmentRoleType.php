<?php
namespace FedEx\RateService\SimpleType;

/**
 * Indicates the role of the party submitting the transaction.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class FreightShipmentRoleType
    extends AbstractSimpleType
{
    const _CONSIGNEE = 'CONSIGNEE';
    const _SHIPPER = 'SHIPPER';
    const _THIRD_PARTY = 'THIRD_PARTY';
}