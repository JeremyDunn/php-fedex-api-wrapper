<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
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
    public function setRateTypeBasis(\FedEx\Pickup\SimpleType\RateTypeBasisType $rateTypeBasis)
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
    public function setChargeBasis(\FedEx\Pickup\SimpleType\CodAddTransportationChargeBasisType $chargeBasis)
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
    public function setChargeBasisLevel(\FedEx\Pickup\SimpleType\ChargeBasisLevelType $chargeBasisLevel)
    {
        $this->ChargeBasisLevel = $chargeBasisLevel;
        return $this;
    }
    

    
}