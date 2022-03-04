<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CodReturnReferenceIndicatorType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CodReturnReferenceIndicatorType extends AbstractSimpleType
{
    const _INVOICE = 'INVOICE';
    const _PO = 'PO';
    const _REFERENCE = 'REFERENCE';
    const _TRACKING = 'TRACKING';
}
