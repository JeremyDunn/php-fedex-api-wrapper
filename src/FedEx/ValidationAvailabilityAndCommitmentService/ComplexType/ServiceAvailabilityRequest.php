<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ServiceAvailabilityRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property Address $Origin
 * @property Address $Destination
 * @property string $ShipDate
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ServiceType|string $Service
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PackagingType|string $Packaging

 */
class ServiceAvailabilityRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ServiceAvailabilityRequest';

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
     * Set Origin
     *
     * @param Address $origin
     * @return $this
     */
    public function setOrigin(Address $origin)
    {
        $this->values['Origin'] = $origin;
        return $this;
    }

    /**
     * Set Destination
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
     * Set ShipDate
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
     * Optionally supplied instead of service to restrict reply to services for a specific carrier.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Restricts reply to single service, if supplied.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ServiceType|string $service
     * @return $this
     */
    public function setService($service)
    {
        $this->values['Service'] = $service;
        return $this;
    }

    /**
     * Set Packaging
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PackagingType|string $packaging
     * @return $this
     */
    public function setPackaging($packaging)
    {
        $this->values['Packaging'] = $packaging;
        return $this;
    }
}
