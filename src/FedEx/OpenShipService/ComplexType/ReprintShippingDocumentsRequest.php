<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ReprintShippingDocumentsRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property TrackingId $TrackingId
 * @property string $ShipmentCreatorAccountNumber
 * @property string $ShipmentCreatorMeterNumber
 * @property LabelSpecification $LabelSpecification

 */
class ReprintShippingDocumentsRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ReprintShippingDocumentsRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return $this
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->values['WebAuthenticationDetail'] = $webAuthenticationDetail;
        return $this;
    }

    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return $this
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->values['ClientDetail'] = $clientDetail;
        return $this;
    }

    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return $this
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->values['TransactionDetail'] = $transactionDetail;
        return $this;
    }

    /**
     * Set Version
     *
     * @param VersionId $version
     * @return $this
     */
    public function setVersion(VersionId $version)
    {
        $this->values['Version'] = $version;
        return $this;
    }

    /**
     * Specifies the tracking id of the package for which documents are being asked to be reprinted.
     *
     * @param TrackingId $trackingId
     * @return $this
     */
    public function setTrackingId(TrackingId $trackingId)
    {
        $this->values['TrackingId'] = $trackingId;
        return $this;
    }

    /**
     * Specifies the account number that was used to create the shipment containing the supplied trackingId.
     *
     * @param string $shipmentCreatorAccountNumber
     * @return $this
     */
    public function setShipmentCreatorAccountNumber($shipmentCreatorAccountNumber)
    {
        $this->values['ShipmentCreatorAccountNumber'] = $shipmentCreatorAccountNumber;
        return $this;
    }

    /**
     * Specifies the meter number that was used to create the shipment containing the supplied trackingId.
     *
     * @param string $shipmentCreatorMeterNumber
     * @return $this
     */
    public function setShipmentCreatorMeterNumber($shipmentCreatorMeterNumber)
    {
        $this->values['ShipmentCreatorMeterNumber'] = $shipmentCreatorMeterNumber;
        return $this;
    }

    /**
     * Contains data used to reprint a shipping label.
     *
     * @param LabelSpecification $labelSpecification
     * @return $this
     */
    public function setLabelSpecification(LabelSpecification $labelSpecification)
    {
        $this->values['LabelSpecification'] = $labelSpecification;
        return $this;
    }
}
