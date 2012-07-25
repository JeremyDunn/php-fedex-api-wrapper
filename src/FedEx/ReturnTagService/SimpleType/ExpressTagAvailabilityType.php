<?php
namespace FedEx\ReturnTagService\SimpleType;

/**
 * Identifies the Express Tag Service availability.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
 */
class ExpressTagAvailabilityType
    extends AbstractSimpleType
{
    const _NEXT_DAY_AVAILABLE = 'NEXT_DAY_AVAILABLE';
    const _SAME_DAY_AND_NEXT_DAY_AVAILABLE = 'SAME_DAY_AND_NEXT_DAY_AVAILABLE';
}