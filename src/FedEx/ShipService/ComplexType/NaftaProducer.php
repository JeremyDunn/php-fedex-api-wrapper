<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This element is currently not supported and is for the future use.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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