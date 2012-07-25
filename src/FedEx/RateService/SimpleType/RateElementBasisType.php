<?php
namespace FedEx\RateService\SimpleType;

/**
 * Selects the value from a set of rate data to which the percentage is applied.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RateElementBasisType
    extends AbstractSimpleType
{
    const _BASE_CHARGE = 'BASE_CHARGE';
    const _NET_CHARGE = 'NET_CHARGE';
    const _NET_CHARGE_EXCLUDING_TAXES = 'NET_CHARGE_EXCLUDING_TAXES';
    const _NET_FREIGHT = 'NET_FREIGHT';
}