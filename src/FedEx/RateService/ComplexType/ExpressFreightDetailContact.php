<?php
namespace FedEx\RateService\ComplexType;

/**
 * Currently not supported. Delivery contact information for an Express freight shipment.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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