<?php
namespace FedEx\RateService\SimpleType;

/**
 * These values are used to control the availability of certain special services at the time when a customer uses the e-mail label link to create a return shipment.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ReturnEMailAllowedSpecialServiceType
    extends AbstractSimpleType
{
    const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    const _SATURDAY_PICKUP = 'SATURDAY_PICKUP';
}