<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the FedEx service to use in shipping the package. See ServiceType for list of valid enumerated values.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ServiceType extends AbstractSimpleType
{
    const _EUROPE_FIRST_INTERNATIONAL_PRIORITY = 'EUROPE_FIRST_INTERNATIONAL_PRIORITY';
    const _FEDEX_1_DAY_FREIGHT = 'FEDEX_1_DAY_FREIGHT';
    const _FEDEX_2_DAY = 'FEDEX_2_DAY';
    const _FEDEX_2_DAY_AM = 'FEDEX_2_DAY_AM';
    const _FEDEX_2_DAY_FREIGHT = 'FEDEX_2_DAY_FREIGHT';
    const _FEDEX_3_DAY_FREIGHT = 'FEDEX_3_DAY_FREIGHT';
    const _FEDEX_EXPRESS_SAVER = 'FEDEX_EXPRESS_SAVER';
    const _FEDEX_FIRST_FREIGHT = 'FEDEX_FIRST_FREIGHT';
    const _FEDEX_FREIGHT_ECONOMY = 'FEDEX_FREIGHT_ECONOMY';
    const _FEDEX_FREIGHT_PRIORITY = 'FEDEX_FREIGHT_PRIORITY';
    const _FEDEX_GROUND = 'FEDEX_GROUND';
    const _FIRST_OVERNIGHT = 'FIRST_OVERNIGHT';
    const _GROUND_HOME_DELIVERY = 'GROUND_HOME_DELIVERY';
    const _INTERNATIONAL_ECONOMY = 'INTERNATIONAL_ECONOMY';
    const _INTERNATIONAL_ECONOMY_FREIGHT = 'INTERNATIONAL_ECONOMY_FREIGHT';
    const _INTERNATIONAL_FIRST = 'INTERNATIONAL_FIRST';
    const _INTERNATIONAL_PRIORITY = 'INTERNATIONAL_PRIORITY';
    const _INTERNATIONAL_PRIORITY_FREIGHT = 'INTERNATIONAL_PRIORITY_FREIGHT';
    const _PRIORITY_OVERNIGHT = 'PRIORITY_OVERNIGHT';
    const _SMART_POST = 'SMART_POST';
    const _STANDARD_OVERNIGHT = 'STANDARD_OVERNIGHT';


    public static function getOfficialName($service){
        $services=[
            'EUROPE_FIRST_INTERNATIONAL_PRIORITY'=>'Europe First International Priority',
            'FEDEX_1_DAY_FREIGHT'=>'FedEx 1 Day Freight',
            'FEDEX_2_DAY'=>'Fedex 2 Day',
            'FEDEX_2_DAY_AM'=>'Fedex 2 Day Am',
            'FEDEX_2_DAY_FREIGHT'=>'Fedex 2 Day Freight ',
            'FEDEX_3_DAY_FREIGHT'=>'Fedex 3 Day Freight ',
            'FEDEX_EXPRESS_SAVER'=>'Fedex Express Saver ',
            'FEDEX_FIRST_FREIGHT'=>'Fedex First Freight',
            'FEDEX_FREIGHT_ECONOMY'=>'FedEx Freight Economy',
            'FEDEX_FREIGHT_PRIORITY'=>'FedEx Freight Priority',
            'FEDEX_GROUND'=>'FedEx Ground',
            'FIRST_OVERNIGHT'=>'FedEx First Overnight',
            'GROUND_HOME_DELIVERY'=>'FedEx Home Delivery',
            'INTERNATIONAL_ECONOMY'=>'FedEx International Economy',
            'INTERNATIONAL_ECONOMY_FREIGHT'=>'FedEx International Economy Freight',
            'INTERNATIONAL_FIRST'=>'FedEx International First',
            'INTERNATIONAL_PRIORITY'=>'FedEx International Priority',
            'INTERNATIONAL_PRIORITY_FREIGHT'=>'FedEx International Priority Freight',
            'PRIORITY_OVERNIGHT'=>'FedEx Priority Overnight',
            'SMART_POST'=>'Smart Post',
            'STANDARD_OVERNIGHT'=>'FedEx Standard Overnight'
        ];
        if(array_key_exists($service, $services)){
            return $services[$service];
        } else {
            return 'Unknown';
        }
    }
}
