<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ServiceDescription
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\ServiceType|string $ServiceType
 * @property string $Code
 * @property ProductName[] $Names
 * @property string $Description
 * @property string $AstraDescription

 */
class ServiceDescription extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ServiceDescription';

    /**
     * Set ServiceType
     *
     * @param \FedEx\ShipService\SimpleType\ServiceType|string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['ServiceType'] = $serviceType;
        return $this;
    }

    /**
     * Set Code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['Code'] = $code;
        return $this;
    }

    /**
     * Branded, translated, and/or localized names for this service.
     *
     * @param ProductName[] $names
     * @return $this
     */
    public function setNames(array $names)
    {
        $this->values['Names'] = $names;
        return $this;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Set AstraDescription
     *
     * @param string $astraDescription
     * @return $this
     */
    public function setAstraDescription($astraDescription)
    {
        $this->values['AstraDescription'] = $astraDescription;
        return $this;
    }
}
