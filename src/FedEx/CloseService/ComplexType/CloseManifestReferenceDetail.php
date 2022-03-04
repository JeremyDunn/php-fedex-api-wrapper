<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CloseManifestReferenceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property \FedEx\CloseService\SimpleType\CustomerReferenceType|string $Type
 * @property string $Value

 */
class CloseManifestReferenceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CloseManifestReferenceDetail';

    /**
     * This identifies which customer reference field used as the manifest ID.
     *
     * @param \FedEx\CloseService\SimpleType\CustomerReferenceType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set Value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }
}
