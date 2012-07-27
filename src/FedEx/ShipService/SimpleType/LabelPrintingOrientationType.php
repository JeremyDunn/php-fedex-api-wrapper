<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * This indicates if the top or bottom of the label comes out of the printer first.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class LabelPrintingOrientationType
    extends AbstractSimpleType
{
    const _BOTTOM_EDGE_OF_TEXT_FIRST = 'BOTTOM_EDGE_OF_TEXT_FIRST';
    const _TOP_EDGE_OF_TEXT_FIRST = 'TOP_EDGE_OF_TEXT_FIRST';
}