<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identification for a FedEx operating company (transportation and non-transportation).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class OperatingCompanyType
    extends AbstractSimpleType
{
    const _FEDEX_OFFICE = 'FEDEX_OFFICE';
}