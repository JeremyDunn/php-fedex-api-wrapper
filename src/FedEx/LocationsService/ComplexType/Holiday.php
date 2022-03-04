<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Holiday
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property string $Name
 * @property string $Date

 */
class Holiday extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Holiday';

    /**
     * Set Name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->values['Name'] = $name;
        return $this;
    }

    /**
     * Set Date
     *
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->values['Date'] = $date;
        return $this;
    }
}
