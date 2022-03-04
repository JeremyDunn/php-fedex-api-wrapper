<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LocationIdentificationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property \FedEx\LocationsService\SimpleType\FedExLocationType|string $Type
 * @property string $Id
 * @property int $Number

 */
class LocationIdentificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LocationIdentificationDetail';

    /**
     * Set Type
     *
     * @param \FedEx\LocationsService\SimpleType\FedExLocationType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set Id
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Set Number
     *
     * @param int $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->values['Number'] = $number;
        return $this;
    }
}
