<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SmartPostCloseRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $HubId
 * @property string $CustomerManifestId
 * @property string $DestinationCountryCode
 * @property \FedEx\CloseService\SimpleType\CarrierCodeType|string $PickUpCarrier
 * @property CloseManifestReferenceDetail $ManifestReferenceDetail

 */
class SmartPostCloseRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SmartPostCloseRequest';

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
     * Set HubId
     *
     * @param string $hubId
     * @return $this
     */
    public function setHubId($hubId)
    {
        $this->values['HubId'] = $hubId;
        return $this;
    }

    /**
     * Set CustomerManifestId
     *
     * @param string $customerManifestId
     * @return $this
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->values['CustomerManifestId'] = $customerManifestId;
        return $this;
    }

    /**
     * Set DestinationCountryCode
     *
     * @param string $destinationCountryCode
     * @return $this
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->values['DestinationCountryCode'] = $destinationCountryCode;
        return $this;
    }

    /**
     * Set PickUpCarrier
     *
     * @param \FedEx\CloseService\SimpleType\CarrierCodeType|string $pickUpCarrier
     * @return $this
     */
    public function setPickUpCarrier($pickUpCarrier)
    {
        $this->values['PickUpCarrier'] = $pickUpCarrier;
        return $this;
    }

    /**
     * Set ManifestReferenceDetail
     *
     * @param CloseManifestReferenceDetail $manifestReferenceDetail
     * @return $this
     */
    public function setManifestReferenceDetail(CloseManifestReferenceDetail $manifestReferenceDetail)
    {
        $this->values['ManifestReferenceDetail'] = $manifestReferenceDetail;
        return $this;
    }
}
