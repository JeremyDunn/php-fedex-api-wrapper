<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Currently not supported. Delivery contact information for an Express freight shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ExpressFreightDetailContact
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ExpressFreightDetailContact';

    /**
     * Set Name
     *
     * @param string $name
     * return ExpressFreightDetailContact
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * Set Phone
     *
     * @param string $phone
     * return ExpressFreightDetailContact
     */
    public function setPhone($phone)
    {
        $this->Phone = $phone;
        return $this;
    }
    

    
}