<?php
namespace FedEx\AddressValidationService\SimpleType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressValidationAccuracyType
    extends AbstractSimpleType
{
    const _EXACT = 'EXACT';
    const _TIGHT = 'TIGHT';
    const _MEDIUM = 'MEDIUM';
    const _LOOSE = 'LOOSE';
}