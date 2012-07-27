<?php
namespace FedEx\CloseService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the requested options to reprinting Ground Close Documents
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ReprintGroundCloseDocumentsOptionType
    extends AbstractSimpleType
{
    const _BY_SHIP_DATE = 'BY_SHIP_DATE';
    const _BY_TRACKING_NUMBER = 'BY_TRACKING_NUMBER';
}