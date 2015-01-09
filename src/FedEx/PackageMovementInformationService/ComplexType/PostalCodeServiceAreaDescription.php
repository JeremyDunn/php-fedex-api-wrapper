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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PostalCodeServiceAreaDescription';

    /**
     * Location ID
     *
     * @param string $locationId
     * @return PostalCodeServiceAreaDescription
     */
    public function setLocationId($locationId)
    {
        $this->LocationId = $locationId;
        return $this;
    }
    
    /**
     * Returns Location ID
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }
    
    /**
     * State or Province code
     *
     * @param string $stateOrProvinceCode
     * @return PostalCodeServiceAreaDescription
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * Returns State or Province code
     *
     * @return string
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }
    
    /**
     * Postal Code
     *
     * @param string $postalCode
     * @return PostalCodeServiceAreaDescription
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Returns Postal Code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    
    /**
     * Service area code
     *
     * @param string $serviceArea
     * @return PostalCodeServiceAreaDescription
     */
    public function setServiceArea($serviceArea)
    {
        $this->ServiceArea = $serviceArea;
        return $this;
    }
    
    /**
     * Returns Service area code
     *
     * @return string
     */
    public function getServiceArea()
    {
        return $this->ServiceArea;
    }
    

    
}