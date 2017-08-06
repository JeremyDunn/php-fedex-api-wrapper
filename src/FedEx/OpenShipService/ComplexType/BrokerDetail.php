<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * BrokerDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\BrokerType|string $Type
 * @property Party $Broker
 * @property Payment $BrokerageProcessingChargesPayment

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
     * @param \FedEx\OpenShipService\SimpleType\BrokerType|string $type
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

    /**
     * Specifies details about how the charges for the brokerage processing are paid for.
     *
     * @param Payment $brokerageProcessingChargesPayment
     * @return $this
     */
    public function setBrokerageProcessingChargesPayment(Payment $brokerageProcessingChargesPayment)
    {
        $this->values['BrokerageProcessingChargesPayment'] = $brokerageProcessingChargesPayment;
        return $this;
    }
}
