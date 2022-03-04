<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackNotificationPackage
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $TrackingNumber
 * @property string $TrackingNumberUniqueIdentifiers
 * @property \FedEx\TrackService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property string $ShipDate
 * @property Address $Destination
 * @property TrackNotificationRecipientDetail[] $RecipientDetails

 */
class TrackNotificationPackage extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackNotificationPackage';

    /**
     * FedEx assigned identifier for a package/shipment.
     *
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['TrackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     *
     * @param string $trackingNumberUniqueIdentifiers
     * @return $this
     */
    public function setTrackingNumberUniqueIdentifiers($trackingNumberUniqueIdentifiers)
    {
        $this->values['TrackingNumberUniqueIdentifiers'] = $trackingNumberUniqueIdentifiers;
        return $this;
    }

    /**
     * Identification of a FedEx operating company (transportation).
     *
     * @param \FedEx\TrackService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * The date the package was shipped (tendered to FedEx).
     *
     * @param string $shipDate
     * @return $this
     */
    public function setShipDate($shipDate)
    {
        $this->values['ShipDate'] = $shipDate;
        return $this;
    }

    /**
     * The destination address of this package. Only city, state/province, and country are returned.
     *
     * @param Address $destination
     * @return $this
     */
    public function setDestination(Address $destination)
    {
        $this->values['Destination'] = $destination;
        return $this;
    }

    /**
     * Options available for a tracking notification recipient.
     *
     * @param TrackNotificationRecipientDetail[] $recipientDetails
     * @return $this
     */
    public function setRecipientDetails(array $recipientDetails)
    {
        $this->values['RecipientDetails'] = $recipientDetails;
        return $this;
    }
}
