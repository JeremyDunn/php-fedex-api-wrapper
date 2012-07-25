<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Identifies the type(s) of rates to be returned in the reply.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RateRequestType
    extends AbstractSimpleType
{
    const _ACCOUNT = 'ACCOUNT';
    const _LIST = 'LIST';
    const _PREFERRED = 'PREFERRED';
}