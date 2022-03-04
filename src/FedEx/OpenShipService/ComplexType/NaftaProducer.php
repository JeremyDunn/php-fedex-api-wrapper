<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NaftaProducer
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $Id
 * @property Party $Producer

 */
class NaftaProducer extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'NaftaProducer';

    /**
     * Set Id
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Set Producer
     *
     * @param Party $producer
     * @return $this
     */
    public function setProducer(Party $producer)
    {
        $this->values['Producer'] = $producer;
        return $this;
    }
}
