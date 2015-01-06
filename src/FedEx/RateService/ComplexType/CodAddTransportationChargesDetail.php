<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CodAddTransportationChargesDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CodAddTransportationChargesDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CodAddTransportationChargesDetail';

    /**
     * Set RateTypeBasis
     *
     * @param \FedEx\RateService\SimpleType\RateTypeBasisType|string $rateTypeBasis
     * @return CodAddTransportationChargesDetail
     */
    public function setRateTypeBasis($rateTypeBasis)
    {
        $this->RateTypeBasis = $rateTypeBasis;
        return $this;
    }
    
    /**
     * Returns Set RateTypeBasis
     *
     * @return \FedEx\RateService\SimpleType\RateTypeBasisType|string
     */
    public function getRateTypeBasis()
    {
        return $this->RateTypeBasis;
    }
    
    /**
     * Set ChargeBasis
     *
     * @param \FedEx\RateService\SimpleType\CodAddTransportationChargeBasisType|string $chargeBasis
     * @return CodAddTransportationChargesDetail
     */
    public function setChargeBasis($chargeBasis)
    {
        $this->ChargeBasis = $chargeBasis;
        return $this;
    }
    
    /**
     * Returns Set ChargeBasis
     *
     * @return \FedEx\RateService\SimpleType\CodAddTransportationChargeBasisType|string
     */
    public function getChargeBasis()
    {
        return $this->ChargeBasis;
    }
    
    /**
     * Set ChargeBasisLevel
     *
     * @param \FedEx\RateService\SimpleType\ChargeBasisLevelType|string $chargeBasisLevel
     * @return CodAddTransportationChargesDetail
     */
    public function setChargeBasisLevel($chargeBasisLevel)
    {
        $this->ChargeBasisLevel = $chargeBasisLevel;
        return $this;
    }
    
    /**
     * Returns Set ChargeBasisLevel
     *
     * @return \FedEx\RateService\SimpleType\ChargeBasisLevelType|string
     */
    public function getChargeBasisLevel()
    {
        return $this->ChargeBasisLevel;
    }
    

    
}