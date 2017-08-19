<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce the Freight handling-unit-level address labels. Note that the number of UNIQUE labels (the N as in 1 of N, 2 of N, etc.) is determined by total handling units.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property ShippingDocumentFormat $Format
 * @property int $Copies
 * @property \FedEx\OpenShipService\SimpleType\PageQuadrantType|string $StartingPosition
 * @property DocTabContent $DocTabContent
 * @property \FedEx\OpenShipService\SimpleType\RelativeVerticalPositionType|string $CustomContentPosition
 * @property CustomLabelDetail $CustomContent

 */
class FreightAddressLabelDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FreightAddressLabelDetail';

    /**
     * Set Format
     *
     * @param ShippingDocumentFormat $format
     * @return $this
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->values['Format'] = $format;
        return $this;
    }

    /**
     * Indicates the number of copies to be produced for each unique label.
     *
     * @param int $copies
     * @return $this
     */
    public function setCopies($copies)
    {
        $this->values['Copies'] = $copies;
        return $this;
    }

    /**
     * Specifies the quadrant of the page on which the label printing will start.
     *
     * @param \FedEx\OpenShipService\SimpleType\PageQuadrantType|string $startingPosition
     * @return $this
     */
    public function setStartingPosition($startingPosition)
    {
        $this->values['StartingPosition'] = $startingPosition;
        return $this;
    }

    /**
     * If omitted, no doc tab will be produced (i.e. default = former NONE type).
     *
     * @param DocTabContent $docTabContent
     * @return $this
     */
    public function setDocTabContent(DocTabContent $docTabContent)
    {
        $this->values['DocTabContent'] = $docTabContent;
        return $this;
    }

    /**
     * Controls the position of the customer specified content relative to the FedEx portion.
     *
     * @param \FedEx\OpenShipService\SimpleType\RelativeVerticalPositionType|string $customContentPosition
     * @return $this
     */
    public function setCustomContentPosition($customContentPosition)
    {
        $this->values['CustomContentPosition'] = $customContentPosition;
        return $this;
    }

    /**
     * Set CustomContent
     *
     * @param CustomLabelDetail $customContent
     * @return $this
     */
    public function setCustomContent(CustomLabelDetail $customContent)
    {
        $this->values['CustomContent'] = $customContent;
        return $this;
    }
}
