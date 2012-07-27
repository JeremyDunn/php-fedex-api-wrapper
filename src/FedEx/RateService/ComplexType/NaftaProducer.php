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
class NaftaProducer
    extends AbstractComplexType
{
    protected $_name = 'NaftaProducer';

    /**
     * 
     *
     * @param string $Id
     * return NaftaProducer
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * 
     *
     * @param Party $Producer
     * return NaftaProducer
     */
    public function setProducer(Party $producer)
    {
        $this->Producer = $producer;
        return $this;
    }
    

    
}