<?php
namespace FedEx\AsyncService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ArtifactPart
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  ASync Service
 *
 * @property int $SequenceNumber
 * @property string $Contents

 */
class ArtifactPart extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ArtifactPart';

    /**
     * Specifies the sequence of this part of the artifact.
     *
     * @param int $sequenceNumber
     * @return $this
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->values['SequenceNumber'] = $sequenceNumber;
        return $this;
    }

    /**
     * Specifies the contents of this retrieved artifact part.
     *
     * @param string $contents
     * @return $this
     */
    public function setContents($contents)
    {
        $this->values['Contents'] = $contents;
        return $this;
    }
}
