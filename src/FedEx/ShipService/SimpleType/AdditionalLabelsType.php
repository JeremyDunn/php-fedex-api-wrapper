<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Identifies the type of additional labels.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class AdditionalLabelsType
    extends AbstractSimpleType
{
    const _BROKER = 'BROKER';
    const _CONSIGNEE = 'CONSIGNEE';
    const _CUSTOMS = 'CUSTOMS';
    const _DESTINATION = 'DESTINATION';
    const _FREIGHT_REFERENCE = 'FREIGHT_REFERENCE';
    const _MANIFEST = 'MANIFEST';
    const _ORIGIN = 'ORIGIN';
    const _RECIPIENT = 'RECIPIENT';
    const _SHIPPER = 'SHIPPER';
}