<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Middle name added to support credit card fraud detection.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ParsedPersonName
    extends AbstractComplexType
{
    protected $_name = 'ParsedPersonName';

    /**
     * The First name of the person.
     *
     * @param string $FirstName
     * return ParsedPersonName
     */
    public function setFirstName($firstName)
    {
        $this->FirstName = $firstName;
        return $this;
    }
    
    /**
     * The middle name of the person.
     *
     * @param string $MiddleName
     * return ParsedPersonName
     */
    public function setMiddleName($middleName)
    {
        $this->MiddleName = $middleName;
        return $this;
    }
    
    /**
     * The last name of the person.
     *
     * @param string $LastName
     * return ParsedPersonName
     */
    public function setLastName($lastName)
    {
        $this->LastName = $lastName;
        return $this;
    }
    

    
}