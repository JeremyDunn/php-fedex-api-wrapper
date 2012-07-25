<?php
namespace FedEx\PickupService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class NotificationParameter
    extends AbstractComplexType
{
    protected $_name = 'NotificationParameter';

    /**
     * Identifies the type of data contained in Value (e.g. SERVICE_TYPE, PACKAGE_SEQUENCE, etc..).
     *
     * @param string $Id
     * return NotificationParameter
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * The value of the parameter (e.g. PRIORITY_OVERNIGHT, 2, etc..).
     *
     * @param string $Value
     * return NotificationParameter
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}