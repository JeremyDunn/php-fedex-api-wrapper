<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the type of label to be returned.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class LabelFormatType
    extends AbstractSimpleType
{
    const _COMMON2D = 'COMMON2D';
    const _FEDEX_FREIGHT_STRAIGHT_BILL_OF_LADING = 'FEDEX_FREIGHT_STRAIGHT_BILL_OF_LADING';
    const _LABEL_DATA_ONLY = 'LABEL_DATA_ONLY';
    const _VICS_BILL_OF_LADING = 'VICS_BILL_OF_LADING';
}