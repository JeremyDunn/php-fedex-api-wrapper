<?php
namespace FedEx\Pickup\SimpleType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CreditCardAuthorizationType
    extends AbstractSimpleType
{
    const _AUTHORIZE_NON_ACCOUNT = 'AUTHORIZE_NON_ACCOUNT';
    const _AUTHORIZE_WITH_ACCOUNT = 'AUTHORIZE_WITH_ACCOUNT';
    const _VERIFY_WITH_ACCOUNT = 'VERIFY_WITH_ACCOUNT';
}