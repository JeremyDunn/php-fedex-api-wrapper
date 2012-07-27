<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CodAddTransportationChargesDetail
    extends AbstractComplexType
{
    protected $_name = 'CodAddTransportationChargesDetail';

    /**
     * 
     *
     * @param RateTypeBasisType $RateTypeBasis
     * return CodAddTransportationChargesDetail
     */
    public function setRateTypeBasis(\FedEx\RateService\SimpleType\RateTypeBasisType $rateTypeBasis)
    {
        $this->RateTypeBasis = $rateTypeBasis;
        return $this;
    }
    
    /**
     * 
     *
     * @param CodAddTransportationChargeBasisType $ChargeBasis
     * return CodAddTransportationChargesDetail
     */
    public function setChargeBasis(\FedEx\RateService\SimpleType\CodAddTransportationChargeBasisType $chargeBasis)
    {
        $this->ChargeBasis = $chargeBasis;
        return $this;
    }
    
    /**
     * 
     *
     * @param ChargeBasisLevelType $ChargeBasisLevel
     * return CodAddTransportationChargesDetail
     */
    public function setChargeBasisLevel(\FedEx\RateService\SimpleType\ChargeBasisLevelType $chargeBasisLevel)
    {
        $this->ChargeBasisLevel = $chargeBasisLevel;
        return $this;
    }
    

    
}