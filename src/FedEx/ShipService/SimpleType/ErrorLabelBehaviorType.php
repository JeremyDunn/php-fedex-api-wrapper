<?php
namespace FedEx\ShipService\SimpleType;

/**
 * 
            Specifies the client-requested response in the event of errors within shipment.
            PACKAGE_ERROR_LABELS : Return per-package error label in addition to error Notifications.
            STANDARD             : Return error Notifications only.
          
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ErrorLabelBehaviorType
    extends AbstractSimpleType
{
    const _PACKAGE_ERROR_LABELS = 'PACKAGE_ERROR_LABELS';
    const _STANDARD = 'STANDARD';
}