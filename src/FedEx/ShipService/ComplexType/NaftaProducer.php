<?php
namespace FedEx\ShipService\ComplexType;

/**
 * This element is currently not supported and is for the future use.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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