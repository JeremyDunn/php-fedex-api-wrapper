<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LocationFieldsForInternalFedexUseDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property string $NonRevenueAccountNumber
 * @property string $CityCenterAccountNumber
 * @property string $CustomsLocationId
 * @property string $CostCenterCode
 * @property \FedEx\LocationsService\SimpleType\LocationAttributesForInternalFedexUseType|string[] $Attributes
 * @property Contact $OperationalContact
 * @property string $LocalAirportId
 * @property string $RegionalAirportId

 */
class LocationFieldsForInternalFedexUseDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LocationFieldsForInternalFedexUseDetail';

    /**
     * Set NonRevenueAccountNumber
     *
     * @param string $nonRevenueAccountNumber
     * @return $this
     */
    public function setNonRevenueAccountNumber($nonRevenueAccountNumber)
    {
        $this->values['NonRevenueAccountNumber'] = $nonRevenueAccountNumber;
        return $this;
    }

    /**
     * The city center account number of the location.
     *
     * @param string $cityCenterAccountNumber
     * @return $this
     */
    public function setCityCenterAccountNumber($cityCenterAccountNumber)
    {
        $this->values['CityCenterAccountNumber'] = $cityCenterAccountNumber;
        return $this;
    }

    /**
     * Set CustomsLocationId
     *
     * @param string $customsLocationId
     * @return $this
     */
    public function setCustomsLocationId($customsLocationId)
    {
        $this->values['CustomsLocationId'] = $customsLocationId;
        return $this;
    }

    /**
     * Set CostCenterCode
     *
     * @param string $costCenterCode
     * @return $this
     */
    public function setCostCenterCode($costCenterCode)
    {
        $this->values['CostCenterCode'] = $costCenterCode;
        return $this;
    }

    /**
     * Set Attributes
     *
     * @param \FedEx\LocationsService\SimpleType\LocationAttributesForInternalFedexUseType[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Specifies the details of a FedEx facility that the operational personnel can contact for clearance purposes.
     *
     * @param Contact $operationalContact
     * @return $this
     */
    public function setOperationalContact(Contact $operationalContact)
    {
        $this->values['OperationalContact'] = $operationalContact;
        return $this;
    }

    /**
     * This contains the local airport identifier-formerly known as the airport code.
     *
     * @param string $localAirportId
     * @return $this
     */
    public function setLocalAirportId($localAirportId)
    {
        $this->values['LocalAirportId'] = $localAirportId;
        return $this;
    }

    /**
     * This contains the regional airport identifier-formerly known as the market location code.
     *
     * @param string $regionalAirportId
     * @return $this
     */
    public function setRegionalAirportId($regionalAirportId)
    {
        $this->values['RegionalAirportId'] = $regionalAirportId;
        return $this;
    }
}
