<?php
namespace FedEx\RateService\SimpleType;

/**
 * Indicates the type of rates to be returned.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RateRequestType
    extends AbstractSimpleType
{
    const _ACCOUNT = 'ACCOUNT';
    const _LIST = 'LIST';
}