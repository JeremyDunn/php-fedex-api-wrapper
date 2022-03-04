<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for a person's name broken out into individual name elements such as first name, last name.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * Set FirstName
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
     * Set MiddleName
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
     * Set LastName
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
