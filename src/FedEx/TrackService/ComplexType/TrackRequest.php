<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data sent by a client to track a FedEx package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * return TrackRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * return TrackRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     *
     * @param TransactionDetail $transactionDetail
     * return TrackRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * The version of the request being used.
     *
     * @param VersionId $version
     * return TrackRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The FedEx operating company (transportation) used for this package's delivery.
     *
     * @param \FedEx\TrackService\SimpleType\CarrierCodeType|string $carrierCode
     * return TrackRequest
     */
    public function setCarrierCode($carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Identifies operating transportation company that is the specific to the carrier code.
     *
     * @param \FedEx\TrackService\SimpleType\OperatingCompanyType|string $operatingCompany
     * return TrackRequest
     */
    public function setOperatingCompany($operatingCompany)
    {
        $this->OperatingCompany = $operatingCompany;
        return $this;
    }
    
    /**
     * The type and value of the package identifier that is to be used to retrieve the tracking information for a package or group of packages.
     *
     * @param TrackPackageIdentifier $packageIdentifier
     * return TrackRequest
     */
    public function setPackageIdentifier(TrackPackageIdentifier $packageIdentifier)
    {
        $this->PackageIdentifier = $packageIdentifier;
        return $this;
    }
    
    /**
     * Used to distinguish duplicate FedEx tracking numbers.
     *
     * @param string $trackingNumberUniqueIdentifier
     * return TrackRequest
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
    {
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    
    /**
     * To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @param date $shipDateRangeBegin
     * return TrackRequest
     */
    public function setShipDateRangeBegin($shipDateRangeBegin)
    {
        $this->ShipDateRangeBegin = $shipDateRangeBegin;
        return $this;
    }
    
    /**
     * To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @param date $shipDateRangeEnd
     * return TrackRequest
     */
    public function setShipDateRangeEnd($shipDateRangeEnd)
    {
        $this->ShipDateRangeEnd = $shipDateRangeEnd;
        return $this;
    }
    
    /**
     * For tracking by references information either the account number or destination postal code and country must be provided.
     *
     * @param string $shipmentAccountNumber
     * return TrackRequest
     */
    public function setShipmentAccountNumber($shipmentAccountNumber)
    {
        $this->ShipmentAccountNumber = $shipmentAccountNumber;
        return $this;
    }
    
    /**
     * For tracking by references information either the account number or destination postal code and country must be provided.
     *
     * @param Address $destination
     * return TrackRequest
     */
    public function setDestination(Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * If false the reply will contain summary/profile data including current status. If true the reply contains profile + detailed scan activity for each package.
     *
     * @param boolean $includeDetailedScans
     * return TrackRequest
     */
    public function setIncludeDetailedScans($includeDetailedScans)
    {
        $this->IncludeDetailedScans = $includeDetailedScans;
        return $this;
    }
    
    /**
     * When the MoreData field = true in a TrackReply the PagingToken must be sent in the subsequent TrackRequest to retrieve the next page of data.
     *
     * @param string $pagingToken
     * return TrackRequest
     */
    public function setPagingToken($pagingToken)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    

    
}