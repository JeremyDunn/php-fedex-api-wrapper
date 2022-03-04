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
class OperatingCompanyType extends AbstractSimpleType
{
    const _FEDEX_CARGO = 'FEDEX_CARGO';
    const _FEDEX_CORPORATE_SERVICES = 'FEDEX_CORPORATE_SERVICES';
    const _FEDEX_CORPORATION = 'FEDEX_CORPORATION';
    const _FEDEX_CUSTOMER_INFORMATION_SYSTEMS = 'FEDEX_CUSTOMER_INFORMATION_SYSTEMS';
    const _FEDEX_CUSTOM_CRITICAL = 'FEDEX_CUSTOM_CRITICAL';
    const _FEDEX_EXPRESS = 'FEDEX_EXPRESS';
    const _FEDEX_FREIGHT = 'FEDEX_FREIGHT';
    const _FEDEX_GROUND = 'FEDEX_GROUND';
    const _FEDEX_KINKOS = 'FEDEX_KINKOS';
    const _FEDEX_OFFICE = 'FEDEX_OFFICE';
    const _FEDEX_SERVICES = 'FEDEX_SERVICES';
    const _FEDEX_TRADE_NETWORKS = 'FEDEX_TRADE_NETWORKS';
}
