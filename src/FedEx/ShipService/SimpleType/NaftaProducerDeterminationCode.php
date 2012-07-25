<?php
namespace FedEx\ShipService\SimpleType;

/**
 * See instructions for NAFTA Certificate of Origin for code definitions.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class NaftaProducerDeterminationCode
    extends AbstractSimpleType
{
    const _NO_1 = 'NO_1';
    const _NO_2 = 'NO_2';
    const _NO_3 = 'NO_3';
    const _YES = 'YES';
}