<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * BrokerDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\BrokerType|string $Type
 * @property Party $Broker

 */
class BrokerDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'BrokerDetail';

    /**
     * Set Type
     *
     * @param \FedEx\ShipService\SimpleType\BrokerType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set Broker
     *
     * @param Party $broker
     * @return $this
     */
    public function setBroker(Party $broker)
    {
        $this->values['Broker'] = $broker;
        return $this;
    }
}
