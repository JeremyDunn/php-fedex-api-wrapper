<?php
namespace FedEx\RateService\SimpleType;

/**
 * Select the type of rate from which the element is to be selected.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RateTypeBasisType
    extends AbstractSimpleType
{
    const _ACCOUNT = 'ACCOUNT';
    const _LIST = 'LIST';
}