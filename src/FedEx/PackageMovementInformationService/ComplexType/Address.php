<?php
namespace FedEx\PackageMovementInformationService\ComplexType;

/**
 * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class Address
    extends AbstractComplexType
{
    protected $_name = 'Address';

    /**
     * Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country.
     *
     * @param string $PostalCode
     * return Address
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * The two-letter code used to identify a country.
     *
     * @param string $CountryCode
     * return Address
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    

    
}