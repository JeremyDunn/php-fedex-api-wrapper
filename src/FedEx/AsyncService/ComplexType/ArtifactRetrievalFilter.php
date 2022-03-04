<?php
namespace FedEx\AsyncService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about the criteria used for artifact selection during retrieval.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  ASync Service
 *
 * @property string $AccessReference
 * @property \FedEx\AsyncService\SimpleType\ArtifactType|string $Type
 * @property string $ReferenceId

 */
class ArtifactRetrievalFilter extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ArtifactRetrievalFilter';

    /**
     * Set AccessReference
     *
     * @param string $accessReference
     * @return $this
     */
    public function setAccessReference($accessReference)
    {
        $this->values['AccessReference'] = $accessReference;
        return $this;
    }

    /**
     * Set Type
     *
     * @param \FedEx\AsyncService\SimpleType\ArtifactType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set ReferenceId
     *
     * @param string $referenceId
     * @return $this
     */
    public function setReferenceId($referenceId)
    {
        $this->values['ReferenceId'] = $referenceId;
        return $this;
    }
}
