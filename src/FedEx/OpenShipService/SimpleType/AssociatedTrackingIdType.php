<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies a relationship between two tracking IDs (the role of the "other" tracking ID relative to "this" tracking ID).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class AssociatedTrackingIdType extends AbstractSimpleType
{
    const _COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN = 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN';
    const _COD_RETURN = 'COD_RETURN';
    const _CONSOLIDATION_DOCUMENTS = 'CONSOLIDATION_DOCUMENTS';
    const _CONSOLIDATION_MASTER = 'CONSOLIDATION_MASTER';
    const _DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN = 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN';
}
