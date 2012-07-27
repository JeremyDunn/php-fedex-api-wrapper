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
    protected $_name = 'ExpressFreightDetailContact';

    /**
     * 
     *
     * @param string $Name
     * return ExpressFreightDetailContact
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Phone
     * return ExpressFreightDetailContact
     */
    public function setPhone($phone)
    {
        $this->Phone = $phone;
        return $this;
    }
    

    
}