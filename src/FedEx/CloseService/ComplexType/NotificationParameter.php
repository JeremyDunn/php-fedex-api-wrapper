<?php
namespace FedEx\CloseService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class NotificationParameter
    extends AbstractComplexType
{
    protected $_name = 'NotificationParameter';

    /**
     * 
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
     * 
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