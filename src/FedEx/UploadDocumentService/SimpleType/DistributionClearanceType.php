<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DistributionClearanceType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class DistributionClearanceType extends AbstractSimpleType
{
    const _DESTINATION_COUNTRY_CLEARANCE = 'DESTINATION_COUNTRY_CLEARANCE';
    const _SINGLE_POINT_OF_CLEARANCE = 'SINGLE_POINT_OF_CLEARANCE';
}
