<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Used to indicate whether the Destination Control Statement is of type Department of Commerce, Department of State or both.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DestinationControlStatementType
    extends AbstractSimpleType
{
    const _DEPARTMENT_OF_COMMERCE = 'DEPARTMENT_OF_COMMERCE';
    const _DEPARTMENT_OF_STATE = 'DEPARTMENT_OF_STATE';
}