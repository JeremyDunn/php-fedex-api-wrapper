<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipperConveyanceDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string $Id

 */
class ShipperConveyanceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipperConveyanceDetail';

    /**
     * This indicates the identifier of a conveyance, such as a trailer ID.
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }
}
