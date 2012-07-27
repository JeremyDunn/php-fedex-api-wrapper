<?php
namespace FedEx\PackageMovementInformationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Postal Code Service Area description.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class PostalCodeServiceAreaDescription
    extends AbstractComplexType
{
    protected $_name = 'PostalCodeServiceAreaDescription';

    /**
     * Location ID
     *
     * @param string $LocationId
     * return PostalCodeServiceAreaDescription
     */
    public function setLocationId($locationId)
    {
        $this->LocationId = $locationId;
        return $this;
    }
    
    /**
     * State or Province code
     *
     * @param string $StateOrProvinceCode
     * return PostalCodeServiceAreaDescription
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * Postal Code
     *
     * @param string $PostalCode
     * return PostalCodeServiceAreaDescription
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Service area code
     *
     * @param string $ServiceArea
     * return PostalCodeServiceAreaDescription
     */
    public function setServiceArea($serviceArea)
    {
        $this->ServiceArea = $serviceArea;
        return $this;
    }
    

    
}