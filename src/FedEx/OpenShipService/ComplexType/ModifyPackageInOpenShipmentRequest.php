<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ModifyPackageInOpenShipmentRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $Index
 * @property \FedEx\OpenShipService\SimpleType\ModifyPackageInOpenShipmentActionType|string[] $Actions
 * @property TrackingId $TrackingId
 * @property RequestedPackageLineItem $RequestedPackageLineItem

 */
class ModifyPackageInOpenShipmentRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ModifyPackageInOpenShipmentRequest';

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
     * Customer-assigned identifier for this shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provided).
     *
     * @param string $index
     * @return $this
     */
    public function setIndex($index)
    {
        $this->values['Index'] = $index;
        return $this;
    }

    /**
     * Specifies the optional actions that can be performed during the modification of packages in Open Shipment
     *
     * @param \FedEx\OpenShipService\SimpleType\ModifyPackageInOpenShipmentActionType[]|string[] $actions
     * @return $this
     */
    public function setActions(array $actions)
    {
        $this->values['Actions'] = $actions;
        return $this;
    }

    /**
     * Specifies the tracking id of the package that is to be modified in the open shipment.
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
     * Contains the data for the package that is to be modified in the open shipment.
     *
     * @param RequestedPackageLineItem $requestedPackageLineItem
     * @return $this
     */
    public function setRequestedPackageLineItem(RequestedPackageLineItem $requestedPackageLineItem)
    {
        $this->values['RequestedPackageLineItem'] = $requestedPackageLineItem;
        return $this;
    }
}
