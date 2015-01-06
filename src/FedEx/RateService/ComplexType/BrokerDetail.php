<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * BrokerDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class BrokerDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'BrokerDetail';

    /**
     * Set Type
     *
     * @param \FedEx\RateService\SimpleType\BrokerType|string $type
     * @return BrokerDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\RateService\SimpleType\BrokerType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set Broker
     *
     * @param Party $broker
     * @return BrokerDetail
     */
    public function setBroker(Party $broker)
    {
        $this->Broker = $broker;
        return $this;
    }
    
    /**
     * Returns Set Broker
     *
     * @return Party
     */
    public function getBroker()
    {
        return $this->Broker;
    }
    

    
}