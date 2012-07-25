<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Identifies a particular reference identifier printed on a Freight bill of lading.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PrintedReferenceType
    extends AbstractSimpleType
{
    const _CONSIGNEE_ID_NUMBER = 'CONSIGNEE_ID_NUMBER';
    const _SHIPPER_ID_NUMBER = 'SHIPPER_ID_NUMBER';
}