<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * InternationalDistributionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\DropoffType|string $DropoffType
 * @property Dimensions $TotalDimensions
 * @property Money $TotalInsuredValue
 * @property \FedEx\OpenShipService\SimpleType\UnitSystemType|string $UnitSystem
 * @property DeclarationCurrency[] $DeclarationCurrencies
 * @property string $ClearanceFacilityLocationId

 */
class InternationalDistributionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'InternationalDistributionDetail';

    /**
     * Set DropoffType
     *
     * @param \FedEx\OpenShipService\SimpleType\DropoffType|string $dropoffType
     * @return $this
     */
    public function setDropoffType($dropoffType)
    {
        $this->values['DropoffType'] = $dropoffType;
        return $this;
    }

    /**
     * Set TotalDimensions
     *
     * @param Dimensions $totalDimensions
     * @return $this
     */
    public function setTotalDimensions(Dimensions $totalDimensions)
    {
        $this->values['TotalDimensions'] = $totalDimensions;
        return $this;
    }

    /**
     * Set TotalInsuredValue
     *
     * @param Money $totalInsuredValue
     * @return $this
     */
    public function setTotalInsuredValue(Money $totalInsuredValue)
    {
        $this->values['TotalInsuredValue'] = $totalInsuredValue;
        return $this;
    }

    /**
     * Set UnitSystem
     *
     * @param \FedEx\OpenShipService\SimpleType\UnitSystemType|string $unitSystem
     * @return $this
     */
    public function setUnitSystem($unitSystem)
    {
        $this->values['UnitSystem'] = $unitSystem;
        return $this;
    }

    /**
     * Set DeclarationCurrencies
     *
     * @param DeclarationCurrency[] $declarationCurrencies
     * @return $this
     */
    public function setDeclarationCurrencies(array $declarationCurrencies)
    {
        $this->values['DeclarationCurrencies'] = $declarationCurrencies;
        return $this;
    }

    /**
     * Set ClearanceFacilityLocationId
     *
     * @param string $clearanceFacilityLocationId
     * @return $this
     */
    public function setClearanceFacilityLocationId($clearanceFacilityLocationId)
    {
        $this->values['ClearanceFacilityLocationId'] = $clearanceFacilityLocationId;
        return $this;
    }
}
