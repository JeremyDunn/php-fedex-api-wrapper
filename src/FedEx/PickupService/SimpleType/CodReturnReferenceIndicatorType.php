<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates which type of reference information to include on the COD return shipping label.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CodReturnReferenceIndicatorType
    extends AbstractSimpleType
{
    const _INVOICE = 'INVOICE';
    const _PO = 'PO';
    const _REFERENCE = 'REFERENCE';
    const _TRACKING = 'TRACKING';
}