<?php
namespace FedEx\PickupService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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
    public function setRateTypeBasis(\FedEx\PickupService\SimpleType\RateTypeBasisType $rateTypeBasis)
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
    public function setChargeBasis(\FedEx\PickupService\SimpleType\CodAddTransportationChargeBasisType $chargeBasis)
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
    public function setChargeBasisLevel(\FedEx\PickupService\SimpleType\ChargeBasisLevelType $chargeBasisLevel)
    {
        $this->ChargeBasisLevel = $chargeBasisLevel;
        return $this;
    }
    

    
}