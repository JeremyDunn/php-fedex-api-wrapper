<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Middle name added to support credit card fraud detection.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName

 */
class ParsedPersonName extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ParsedPersonName';

    /**
     * The First name of the person.
     *
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->values['FirstName'] = $firstName;
        return $this;
    }

    /**
     * The middle name of the person.
     *
     * @param string $middleName
     * @return $this
     */
    public function setMiddleName($middleName)
    {
        $this->values['MiddleName'] = $middleName;
        return $this;
    }

    /**
     * The last name of the person.
     *
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->values['LastName'] = $lastName;
        return $this;
    }
}
