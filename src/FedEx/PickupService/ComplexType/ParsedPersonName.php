<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Middle name added to support credit card fraud detection.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ParsedPersonName
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ParsedPersonName';

    /**
     * The First name of the person.
     *
     * @param string $firstName
     * @return ParsedPersonName
     */
    public function setFirstName($firstName)
    {
        $this->FirstName = $firstName;
        return $this;
    }
    
    /**
     * Returns The First name of the person.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    
    /**
     * The middle name of the person.
     *
     * @param string $middleName
     * @return ParsedPersonName
     */
    public function setMiddleName($middleName)
    {
        $this->MiddleName = $middleName;
        return $this;
    }
    
    /**
     * Returns The middle name of the person.
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }
    
    /**
     * The last name of the person.
     *
     * @param string $lastName
     * @return ParsedPersonName
     */
    public function setLastName($lastName)
    {
        $this->LastName = $lastName;
        return $this;
    }
    
    /**
     * Returns The last name of the person.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    

    
}