<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ConsolidatedCommodityDestinationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $CountryCode
 * @property string $StateOrProvinceCode
 * @property boolean $Residential

 */
class ConsolidatedCommodityDestinationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ConsolidatedCommodityDestinationDetail';

    /**
     * Set CountryCode
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->values['CountryCode'] = $countryCode;
        return $this;
    }

    /**
     * Set StateOrProvinceCode
     *
     * @param string $stateOrProvinceCode
     * @return $this
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->values['StateOrProvinceCode'] = $stateOrProvinceCode;
        return $this;
    }

    /**
     * Set Residential
     *
     * @param boolean $residential
     * @return $this
     */
    public function setResidential($residential)
    {
        $this->values['Residential'] = $residential;
        return $this;
    }
}
