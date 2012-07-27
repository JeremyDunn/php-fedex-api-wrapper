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
class NaftaCommodityDetail
    extends AbstractComplexType
{
    protected $_name = 'NaftaCommodityDetail';

    /**
     * Defined by NAFTA regulations.
     *
     * @param NaftaPreferenceCriterionCode $PreferenceCriterion
     * return NaftaCommodityDetail
     */
    public function setPreferenceCriterion(\FedEx\RateService\SimpleType\NaftaPreferenceCriterionCode $preferenceCriterion)
    {
        $this->PreferenceCriterion = $preferenceCriterion;
        return $this;
    }
    
    /**
     * Defined by NAFTA regulations.
     *
     * @param NaftaProducerDeterminationCode $ProducerDetermination
     * return NaftaCommodityDetail
     */
    public function setProducerDetermination(\FedEx\RateService\SimpleType\NaftaProducerDeterminationCode $producerDetermination)
    {
        $this->ProducerDetermination = $producerDetermination;
        return $this;
    }
    
    /**
     * Identification of which producer is associated with this commodity (if multiple producers are used in a single shipment).
     *
     * @param string $ProducerId
     * return NaftaCommodityDetail
     */
    public function setProducerId($producerId)
    {
        $this->ProducerId = $producerId;
        return $this;
    }
    
    /**
     * 
     *
     * @param NaftaNetCostMethodCode $NetCostMethod
     * return NaftaCommodityDetail
     */
    public function setNetCostMethod(\FedEx\RateService\SimpleType\NaftaNetCostMethodCode $netCostMethod)
    {
        $this->NetCostMethod = $netCostMethod;
        return $this;
    }
    
    /**
     * Date range over which RVC net cost was calculated.
     *
     * @param DateRange $NetCostDateRange
     * return NaftaCommodityDetail
     */
    public function setNetCostDateRange(DateRange $netCostDateRange)
    {
        $this->NetCostDateRange = $netCostDateRange;
        return $this;
    }
    

    
}