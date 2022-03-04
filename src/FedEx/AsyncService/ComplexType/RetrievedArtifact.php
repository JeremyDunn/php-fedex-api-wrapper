<?php
namespace FedEx\AsyncService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RetrievedArtifact
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  ASync Service
 *
 * @property string $AccessReference
 * @property \FedEx\AsyncService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property \FedEx\AsyncService\SimpleType\ArtifactType|string $Type
 * @property \FedEx\AsyncService\SimpleType\ArtifactFormatType|string $Format
 * @property string $FormatSpecification
 * @property string $ReferenceId
 * @property ArtifactPart[] $Parts

 */
class RetrievedArtifact extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RetrievedArtifact';

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
     * Set HighestSeverity
     *
     * @param \FedEx\AsyncService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return $this
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->values['HighestSeverity'] = $highestSeverity;
        return $this;
    }

    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return $this
     */
    public function setNotifications(array $notifications)
    {
        $this->values['Notifications'] = $notifications;
        return $this;
    }

    /**
     * Identifies the type of artifact.
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
     * Specifies the format of the artifact.
     *
     * @param \FedEx\AsyncService\SimpleType\ArtifactFormatType|string $format
     * @return $this
     */
    public function setFormat($format)
    {
        $this->values['Format'] = $format;
        return $this;
    }

    /**
     * Identifies the schema or specific format definition used for the artifact.
     *
     * @param string $formatSpecification
     * @return $this
     */
    public function setFormatSpecification($formatSpecification)
    {
        $this->values['FormatSpecification'] = $formatSpecification;
        return $this;
    }

    /**
     * Specifies a reference to the artifact that follows the naming convention defined for file storage.
     *
     * @param string $referenceId
     * @return $this
     */
    public function setReferenceId($referenceId)
    {
        $this->values['ReferenceId'] = $referenceId;
        return $this;
    }

    /**
     * Set Parts
     *
     * @param ArtifactPart[] $parts
     * @return $this
     */
    public function setParts(array $parts)
    {
        $this->values['Parts'] = $parts;
        return $this;
    }
}
