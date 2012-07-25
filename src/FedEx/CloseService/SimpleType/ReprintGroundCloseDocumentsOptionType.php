<?php
namespace FedEx\CloseService\SimpleType;

/**
 * Identifies the requested options to reprinting Ground Close Documents
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ReprintGroundCloseDocumentsOptionType
    extends AbstractSimpleType
{
    const _BY_SHIP_DATE = 'BY_SHIP_DATE';
    const _BY_TRACKING_NUMBER = 'BY_TRACKING_NUMBER';
}