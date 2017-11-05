<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackingDocument
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\TrackingDocumentType|string $Type
 * @property Localization[] $Localizations
 * @property \FedEx\TrackService\SimpleType\TrackingDocumentImageType|string $ImageType
 * @property int $Resolution
 * @property DocumentPart[] $Parts

 */
class TrackingDocument extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackingDocument';

    /**
     * Set Type
     *
     * @param \FedEx\TrackService\SimpleType\TrackingDocumentType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set Localizations
     *
     * @param Localization[] $localizations
     * @return $this
     */
    public function setLocalizations(array $localizations)
    {
        $this->values['Localizations'] = $localizations;
        return $this;
    }

    /**
     * Set ImageType
     *
     * @param \FedEx\TrackService\SimpleType\TrackingDocumentImageType|string $imageType
     * @return $this
     */
    public function setImageType($imageType)
    {
        $this->values['ImageType'] = $imageType;
        return $this;
    }

    /**
     * Set Resolution
     *
     * @param int $resolution
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->values['Resolution'] = $resolution;
        return $this;
    }

    /**
     * Set Parts
     *
     * @param DocumentPart[] $parts
     * @return $this
     */
    public function setParts(array $parts)
    {
        $this->values['Parts'] = $parts;
        return $this;
    }
}
