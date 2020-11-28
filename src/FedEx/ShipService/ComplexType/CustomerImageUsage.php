<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomerImageUsage
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\CustomerImageUsageType|string $Type
 * @property \FedEx\ShipService\SimpleType\ImageId|string $Id
 * @property string $InternalId
 * @property \FedEx\ShipService\SimpleType\InternalImageType|string $InternalImageType

 */
class CustomerImageUsage extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomerImageUsage';

    /**
     * Set Type
     *
     * @param \FedEx\ShipService\SimpleType\CustomerImageUsageType|string $type
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
     * @param \FedEx\ShipService\SimpleType\ImageId|string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Internal Id used by INET to identify customer provided images during documents generation. Ex COO etc ...
     *
     * @param string $internalId
     * @return $this
     */
    public function setInternalId($internalId)
    {
        $this->values['InternalId'] = $internalId;
        return $this;
    }

    /**
     * Internal image type used by INET to identify customer provided images during documents generation. Ex COO etc ..
     *
     * @param \FedEx\ShipService\SimpleType\InternalImageType|string $internalImageType
     * @return $this
     */
    public function setInternalImageType($internalImageType)
    {
        $this->values['InternalImageType'] = $internalImageType;
        return $this;
    }
}
