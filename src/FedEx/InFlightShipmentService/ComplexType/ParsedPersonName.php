<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for a person's name broken out into individual name elements such as first name, last name.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property string $Prefix
 * @property string $Title
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName
 * @property string $Suffix

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
     * Specifies the salutation part of the name, if any is specified. Examples of prefix: Sir, Madam, Monsieur.
     *
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->values['Prefix'] = $prefix;
        return $this;
    }

    /**
     * Specifies the professional title in the person name, if any is specified.
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->values['Title'] = $title;
        return $this;
    }

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

    /**
     * Identifies the contact person's name suffix.
     *
     * @param string $suffix
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->values['Suffix'] = $suffix;
        return $this;
    }
}
