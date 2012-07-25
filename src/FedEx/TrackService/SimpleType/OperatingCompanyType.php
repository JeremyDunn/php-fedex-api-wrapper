<?php
namespace FedEx\TrackService\SimpleType;

/**
 * Identification for a FedEx operating company (transportation and non-transportation).
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class OperatingCompanyType
    extends AbstractSimpleType
{
    const _FEDEX_OFFICE = 'FEDEX_OFFICE';
}