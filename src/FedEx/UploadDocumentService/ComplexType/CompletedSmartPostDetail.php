<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Provides reply information specific to SmartPost shipments.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\CarrierCodeType|string $PickUpCarrier
 * @property boolean $Machinable

 */
class CompletedSmartPostDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CompletedSmartPostDetail';

    /**
     * Identifies the carrier that will pick up the SmartPost shipment.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\CarrierCodeType|string $pickUpCarrier
     * @return $this
     */
    public function setPickUpCarrier($pickUpCarrier)
    {
        $this->values['PickUpCarrier'] = $pickUpCarrier;
        return $this;
    }

    /**
     * Indicates whether the shipment is deemed to be machineable, based on dimensions, weight, and packaging.
     *
     * @param boolean $machinable
     * @return $this
     */
    public function setMachinable($machinable)
    {
        $this->values['Machinable'] = $machinable;
        return $this;
    }
}
