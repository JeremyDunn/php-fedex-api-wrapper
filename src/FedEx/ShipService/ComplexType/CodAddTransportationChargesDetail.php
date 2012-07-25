<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
    public function setRateTypeBasis(\FedEx\ShipService\SimpleType\RateTypeBasisType $rateTypeBasis)
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
    public function setChargeBasis(\FedEx\ShipService\SimpleType\CodAddTransportationChargeBasisType $chargeBasis)
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
    public function setChargeBasisLevel(\FedEx\ShipService\SimpleType\ChargeBasisLevelType $chargeBasisLevel)
    {
        $this->ChargeBasisLevel = $chargeBasisLevel;
        return $this;
    }
    

    
}