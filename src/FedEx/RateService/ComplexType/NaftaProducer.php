<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NaftaProducer
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class NaftaProducer
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'NaftaProducer';

    /**
     * Set Id
     *
     * @param string $id
     * @return NaftaProducer
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Returns Set Id
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    
    /**
     * Set Producer
     *
     * @param Party $producer
     * @return NaftaProducer
     */
    public function setProducer(Party $producer)
    {
        $this->Producer = $producer;
        return $this;
    }
    
    /**
     * Returns Set Producer
     *
     * @return Party
     */
    public function getProducer()
    {
        return $this->Producer;
    }
    

    
}