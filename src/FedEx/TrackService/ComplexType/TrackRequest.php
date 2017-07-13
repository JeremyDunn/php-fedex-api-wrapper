<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data sent by a client to track a FedEx package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property \FedEx\TrackService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property \FedEx\TrackService\SimpleType\OperatingCompanyType|string $OperatingCompany
 * @property TrackPackageIdentifier $PackageIdentifier
 * @property string $TrackingNumberUniqueIdentifier
 * @property string $ShipDateRangeBegin
 * @property string $ShipDateRangeEnd
 * @property string $ShipmentAccountNumber
 * @property Address $Destination
 * @property boolean $IncludeDetailedScans
 * @property string $PagingToken

 */
class TrackRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackRequest';

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
     * Descriptive data identifying the client submitting the transaction.
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
     * Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
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
     * The version of the request being used.
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
     * The FedEx operating company (transportation) used for this package's delivery.
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
     * Identifies operating transportation company that is the specific to the carrier code.
     *
     * @param \FedEx\TrackService\SimpleType\OperatingCompanyType|string $operatingCompany
     * @return $this
     */
    public function setOperatingCompany($operatingCompany)
    {
        $this->values['OperatingCompany'] = $operatingCompany;
        return $this;
    }

    /**
     * The type and value of the package identifier that is to be used to retrieve the tracking information for a package or group of packages.
     *
     * @param TrackPackageIdentifier $packageIdentifier
     * @return $this
     */
    public function setPackageIdentifier(TrackPackageIdentifier $packageIdentifier)
    {
        $this->values['PackageIdentifier'] = $packageIdentifier;
        return $this;
    }

    /**
     * Used to distinguish duplicate FedEx tracking numbers.
     *
     * @param string $trackingNumberUniqueIdentifier
     * @return $this
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
    {
        $this->values['TrackingNumberUniqueIdentifier'] = $trackingNumberUniqueIdentifier;
        return $this;
    }

    /**
     * To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @param string $shipDateRangeBegin
     * @return $this
     */
    public function setShipDateRangeBegin($shipDateRangeBegin)
    {
        $this->values['ShipDateRangeBegin'] = $shipDateRangeBegin;
        return $this;
    }

    /**
     * To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @param string $shipDateRangeEnd
     * @return $this
     */
    public function setShipDateRangeEnd($shipDateRangeEnd)
    {
        $this->values['ShipDateRangeEnd'] = $shipDateRangeEnd;
        return $this;
    }

    /**
     * For tracking by references information either the account number or destination postal code and country must be provided.
     *
     * @param string $shipmentAccountNumber
     * @return $this
     */
    public function setShipmentAccountNumber($shipmentAccountNumber)
    {
        $this->values['ShipmentAccountNumber'] = $shipmentAccountNumber;
        return $this;
    }

    /**
     * For tracking by references information either the account number or destination postal code and country must be provided.
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
     * If false the reply will contain summary/profile data including current status. If true the reply contains profile + detailed scan activity for each package.
     *
     * @param boolean $includeDetailedScans
     * @return $this
     */
    public function setIncludeDetailedScans($includeDetailedScans)
    {
        $this->values['IncludeDetailedScans'] = $includeDetailedScans;
        return $this;
    }

    /**
     * When the MoreData field = true in a TrackReply the PagingToken must be sent in the subsequent TrackRequest to retrieve the next page of data.
     *
     * @param string $pagingToken
     * @return $this
     */
    public function setPagingToken($pagingToken)
    {
        $this->values['PagingToken'] = $pagingToken;
        return $this;
    }
}
