<?php
namespace FedEx\ShipService\SimpleType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightChargeBasisType
    extends AbstractSimpleType
{
    const _CWT = 'CWT';
    const _FLAT = 'FLAT';
    const _MINIMUM = 'MINIMUM';
}