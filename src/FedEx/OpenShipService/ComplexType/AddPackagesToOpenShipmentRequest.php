<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This request adds one or more packages to an existing open shipment.
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
 * @property \FedEx\OpenShipService\SimpleType\AddPackagesToOpenShipmentActionType|string[] $Actions
 * @property RequestedPackageLineItem[] $RequestedPackageLineItems

 */
class AddPackagesToOpenShipmentRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddPackagesToOpenShipmentRequest';

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
     * Specifies the optional actions to be performed during the addition of packages to this open shipment.
     *
     * @param \FedEx\OpenShipService\SimpleType\AddPackagesToOpenShipmentActionType[]|string[] $actions
     * @return $this
     */
    public function setActions(array $actions)
    {
        $this->values['Actions'] = $actions;
        return $this;
    }

    /**
     * One or more package-attribute descriptions, each of which describes an individual package in the shipment.
     *
     * @param RequestedPackageLineItem[] $requestedPackageLineItems
     * @return $this
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems)
    {
        $this->values['RequestedPackageLineItems'] = $requestedPackageLineItems;
        return $this;
    }
}
