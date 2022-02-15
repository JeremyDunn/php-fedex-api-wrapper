<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * These values are used to control the availability of certain special services at the time when a customer uses the e-mail label link to create a return shipment.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class ReturnEMailAllowedSpecialServiceType extends AbstractSimpleType
{
    const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    const _SATURDAY_PICKUP = 'SATURDAY_PICKUP';
}
