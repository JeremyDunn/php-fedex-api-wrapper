<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackingDocumentFormat
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property TrackingDocumentDispositionDetail[] $Dispositions
 * @property \FedEx\TrackService\SimpleType\TrackingDocumentGroupingType|string $Grouping
 * @property \FedEx\TrackService\SimpleType\TrackingDocumentImageType|string $ImageType
 * @property Localization $Localization

 */
class TrackingDocumentFormat extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackingDocumentFormat';

    /**
     * Set Dispositions
     *
     * @param TrackingDocumentDispositionDetail[] $dispositions
     * @return $this
     */
    public function setDispositions(array $dispositions)
    {
        $this->values['Dispositions'] = $dispositions;
        return $this;
    }

    /**
     * Set Grouping
     *
     * @param \FedEx\TrackService\SimpleType\TrackingDocumentGroupingType|string $grouping
     * @return $this
     */
    public function setGrouping($grouping)
    {
        $this->values['Grouping'] = $grouping;
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
     * The localization for the generated document.
     *
     * @param Localization $localization
     * @return $this
     */
    public function setLocalization(Localization $localization)
    {
        $this->values['Localization'] = $localization;
        return $this;
    }
}
