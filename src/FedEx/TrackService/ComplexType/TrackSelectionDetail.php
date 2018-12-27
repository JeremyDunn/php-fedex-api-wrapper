<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackSelectionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property \FedEx\TrackService\SimpleType\OperatingCompanyType|string $OperatingCompany
 * @property TrackPackageIdentifier $PackageIdentifier
 * @property string $TrackingNumberUniqueIdentifier
 * @property string $ShipDateRangeBegin
 * @property string $ShipDateRangeEnd
 * @property string $ShipmentAccountNumber
 * @property string $SecureSpodAccount
 * @property Address $Destination
 * @property PagingDetail $PagingDetail
 * @property int $CustomerSpecifiedTimeOutValueInMilliseconds

 */
class TrackSelectionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackSelectionDetail';

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
     * Specifies the SPOD account number for the shipment being tracked.
     *
     * @param string $secureSpodAccount
     * @return $this
     */
    public function setSecureSpodAccount($secureSpodAccount)
    {
        $this->values['SecureSpodAccount'] = $secureSpodAccount;
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
     * Specifies the details about how to retrieve the subsequent pages when there is more than one page in the TrackReply.
     *
     * @param PagingDetail $pagingDetail
     * @return $this
     */
    public function setPagingDetail(PagingDetail $pagingDetail)
    {
        $this->values['PagingDetail'] = $pagingDetail;
        return $this;
    }

    /**
     * The customer can specify a desired time out value for this particular tracking number.
     *
     * @param int $customerSpecifiedTimeOutValueInMilliseconds
     * @return $this
     */
    public function setCustomerSpecifiedTimeOutValueInMilliseconds($customerSpecifiedTimeOutValueInMilliseconds)
    {
        $this->values['CustomerSpecifiedTimeOutValueInMilliseconds'] = $customerSpecifiedTimeOutValueInMilliseconds;
        return $this;
    }
}
