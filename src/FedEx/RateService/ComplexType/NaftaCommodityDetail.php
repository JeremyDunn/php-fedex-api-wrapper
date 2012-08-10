<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NaftaCommodityDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class NaftaCommodityDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'NaftaCommodityDetail';

    /**
     * Defined by NAFTA regulations.
     *
     * @param \FedEx\RateService\SimpleType\NaftaPreferenceCriterionCode|string $preferenceCriterion
     * return NaftaCommodityDetail
     */
    public function setPreferenceCriterion($preferenceCriterion)
    {
        $this->PreferenceCriterion = $preferenceCriterion;
        return $this;
    }
    
    /**
     * Defined by NAFTA regulations.
     *
     * @param \FedEx\RateService\SimpleType\NaftaProducerDeterminationCode|string $producerDetermination
     * return NaftaCommodityDetail
     */
    public function setProducerDetermination($producerDetermination)
    {
        $this->ProducerDetermination = $producerDetermination;
        return $this;
    }
    
    /**
     * Identification of which producer is associated with this commodity (if multiple producers are used in a single shipment).
     *
     * @param string $producerId
     * return NaftaCommodityDetail
     */
    public function setProducerId($producerId)
    {
        $this->ProducerId = $producerId;
        return $this;
    }
    
    /**
     * Set NetCostMethod
     *
     * @param \FedEx\RateService\SimpleType\NaftaNetCostMethodCode|string $netCostMethod
     * return NaftaCommodityDetail
     */
    public function setNetCostMethod($netCostMethod)
    {
        $this->NetCostMethod = $netCostMethod;
        return $this;
    }
    
    /**
     * Date range over which RVC net cost was calculated.
     *
     * @param DateRange $netCostDateRange
     * return NaftaCommodityDetail
     */
    public function setNetCostDateRange(DateRange $netCostDateRange)
    {
        $this->NetCostDateRange = $netCostDateRange;
        return $this;
    }
    

    
}