<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UpdatePickupRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property UserDetail $UserDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property \FedEx\PickupService\SimpleType\UpdatePickupRequestProcessingOptionType|string[] $ProcessingOptions
 * @property string $PickupConfirmationNumber
 * @property string $ScheduledDate
 * @property string $Reason
 * @property string $Comments
 * @property string $TemporaryCustomerId
 * @property AssociatedAccount $AssociatedAccountNumber
 * @property PickupOriginDetail $OriginDetail
 * @property \FedEx\PickupService\SimpleType\PickupServiceCategoryType|string $PickupServiceCategory
 * @property FreightPickupDetail $FreightPickupDetail
 * @property ExpressFreightPickupDetail $ExpressFreightDetail
 * @property PickupTagDetail $TagDetail
 * @property RequestedPickupShipmentDetail $RequestedExpressPickupDetail
 * @property \FedEx\PickupService\SimpleType\PickupType|string $PickupType
 * @property int $PackageCount
 * @property Weight $TotalWeight
 * @property \FedEx\PickupService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property int $OversizePackageCount
 * @property string $Remarks
 * @property string $CommodityDescription
 * @property \FedEx\PickupService\SimpleType\CountryRelationshipType|string $CountryRelationship

 */
class UpdatePickupRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UpdatePickupRequest';

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
     * Set UserDetail
     *
     * @param UserDetail $userDetail
     * @return $this
     */
    public function setUserDetail(UserDetail $userDetail)
    {
        $this->values['UserDetail'] = $userDetail;
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
     * Set ProcessingOptions
     *
     * @param \FedEx\PickupService\SimpleType\UpdatePickupRequestProcessingOptionType[]|string[] $processingOptions
     * @return $this
     */
    public function setProcessingOptions(array $processingOptions)
    {
        $this->values['ProcessingOptions'] = $processingOptions;
        return $this;
    }

    /**
     * Set PickupConfirmationNumber
     *
     * @param string $pickupConfirmationNumber
     * @return $this
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber)
    {
        $this->values['PickupConfirmationNumber'] = $pickupConfirmationNumber;
        return $this;
    }

    /**
     * The local date which the pickup was originally scheduled to be picked up on. The date provided is the local to the client of the request. The date specification does not include any time zone designators.
     *
     * @param string $scheduledDate
     * @return $this
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->values['ScheduledDate'] = $scheduledDate;
        return $this;
    }

    /**
     * Brief information for performing the pickup update
     *
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->values['Reason'] = $reason;
        return $this;
    }

    /**
     * Descriptive information for performing the pickup update
     *
     * @param string $comments
     * @return $this
     */
    public function setComments($comments)
    {
        $this->values['Comments'] = $comments;
        return $this;
    }

    /**
     * Temporary customer id that is assigned to a non-account customer, who has called in to schedule a pickup. This temporary customer id is persisted at the backend for a certain window of time. Within this window of time, this temporary id can be re-used by the customer to request pickups. This is way to allow customers to process pickup without the need to create an account with FedEx.
     *
     * @param string $temporaryCustomerId
     * @return $this
     */
    public function setTemporaryCustomerId($temporaryCustomerId)
    {
        $this->values['TemporaryCustomerId'] = $temporaryCustomerId;
        return $this;
    }

    /**
     * Set AssociatedAccountNumber
     *
     * @param AssociatedAccount $associatedAccountNumber
     * @return $this
     */
    public function setAssociatedAccountNumber(AssociatedAccount $associatedAccountNumber)
    {
        $this->values['AssociatedAccountNumber'] = $associatedAccountNumber;
        return $this;
    }

    /**
     * Set OriginDetail
     *
     * @param PickupOriginDetail $originDetail
     * @return $this
     */
    public function setOriginDetail(PickupOriginDetail $originDetail)
    {
        $this->values['OriginDetail'] = $originDetail;
        return $this;
    }

    /**
     * Set PickupServiceCategory
     *
     * @param \FedEx\PickupService\SimpleType\PickupServiceCategoryType|string $pickupServiceCategory
     * @return $this
     */
    public function setPickupServiceCategory($pickupServiceCategory)
    {
        $this->values['PickupServiceCategory'] = $pickupServiceCategory;
        return $this;
    }

    /**
     * Set FreightPickupDetail
     *
     * @param FreightPickupDetail $freightPickupDetail
     * @return $this
     */
    public function setFreightPickupDetail(FreightPickupDetail $freightPickupDetail)
    {
        $this->values['FreightPickupDetail'] = $freightPickupDetail;
        return $this;
    }

    /**
     * Set ExpressFreightDetail
     *
     * @param ExpressFreightPickupDetail $expressFreightDetail
     * @return $this
     */
    public function setExpressFreightDetail(ExpressFreightPickupDetail $expressFreightDetail)
    {
        $this->values['ExpressFreightDetail'] = $expressFreightDetail;
        return $this;
    }

    /**
     * Set TagDetail
     *
     * @param PickupTagDetail $tagDetail
     * @return $this
     */
    public function setTagDetail(PickupTagDetail $tagDetail)
    {
        $this->values['TagDetail'] = $tagDetail;
        return $this;
    }

    /**
     * Set RequestedExpressPickupDetail
     *
     * @param RequestedPickupShipmentDetail $requestedExpressPickupDetail
     * @return $this
     */
    public function setRequestedExpressPickupDetail(RequestedPickupShipmentDetail $requestedExpressPickupDetail)
    {
        $this->values['RequestedExpressPickupDetail'] = $requestedExpressPickupDetail;
        return $this;
    }

    /**
     * Set PickupType
     *
     * @param \FedEx\PickupService\SimpleType\PickupType|string $pickupType
     * @return $this
     */
    public function setPickupType($pickupType)
    {
        $this->values['PickupType'] = $pickupType;
        return $this;
    }

    /**
     * Set PackageCount
     *
     * @param int $packageCount
     * @return $this
     */
    public function setPackageCount($packageCount)
    {
        $this->values['PackageCount'] = $packageCount;
        return $this;
    }

    /**
     * Set TotalWeight
     *
     * @param Weight $totalWeight
     * @return $this
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->values['TotalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Set CarrierCode
     *
     * @param \FedEx\PickupService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Set OversizePackageCount
     *
     * @param int $oversizePackageCount
     * @return $this
     */
    public function setOversizePackageCount($oversizePackageCount)
    {
        $this->values['OversizePackageCount'] = $oversizePackageCount;
        return $this;
    }

    /**
     * Remarks for pickup Courier
     *
     * @param string $remarks
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->values['Remarks'] = $remarks;
        return $this;
    }

    /**
     * Set CommodityDescription
     *
     * @param string $commodityDescription
     * @return $this
     */
    public function setCommodityDescription($commodityDescription)
    {
        $this->values['CommodityDescription'] = $commodityDescription;
        return $this;
    }

    /**
     * Set CountryRelationship
     *
     * @param \FedEx\PickupService\SimpleType\CountryRelationshipType|string $countryRelationship
     * @return $this
     */
    public function setCountryRelationship($countryRelationship)
    {
        $this->values['CountryRelationship'] = $countryRelationship;
        return $this;
    }
}
