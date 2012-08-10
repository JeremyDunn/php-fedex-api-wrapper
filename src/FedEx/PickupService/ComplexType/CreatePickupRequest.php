<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data to schedule a FedEx package pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CreatePickupRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CreatePickupRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * return CreatePickupRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * return CreatePickupRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * return CreatePickupRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * return CreatePickupRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Set AssociatedAccountNumber
     *
     * @param AssociatedAccount $associatedAccountNumber
     * return CreatePickupRequest
     */
    public function setAssociatedAccountNumber(AssociatedAccount $associatedAccountNumber)
    {
        $this->AssociatedAccountNumber = $associatedAccountNumber;
        return $this;
    }
    
    /**
     * Descriptive data about the origin of the shipment being picked up by FedEx.
     *
     * @param PickupOriginDetail $originDetail
     * return CreatePickupRequest
     */
    public function setOriginDetail(PickupOriginDetail $originDetail)
    {
        $this->OriginDetail = $originDetail;
        return $this;
    }
    
    /**
     * Descriptive data for a freight shipment being picked up by FedEx. This is element is only required when requesting a freight service pickup and should not be used for other types of pickups including express freight pickups.
     *
     * @param FreightPickupDetail $freightPickupDetail
     * return CreatePickupRequest
     */
    public function setFreightPickupDetail(FreightPickupDetail $freightPickupDetail)
    {
        $this->FreightPickupDetail = $freightPickupDetail;
        return $this;
    }
    
    /**
     * Descriptive data for an express freight shipment being picked up by FedEx. This is element is only required when requesting a express freight service pickup and should not be used for other types of pickups.
     *
     * @param ExpressFreightPickupDetail $expressFreightDetail
     * return CreatePickupRequest
     */
    public function setExpressFreightDetail(ExpressFreightPickupDetail $expressFreightDetail)
    {
        $this->ExpressFreightDetail = $expressFreightDetail;
        return $this;
    }
    
    /**
     * Identifies the number of packages that are being tendered to FedEx for this pickup request.
     *
     * @param positiveInteger $packageCount
     * return CreatePickupRequest
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * Identifies the total weight of the package or packages being tendered to FedEx for this pickup request.
     *
     * @param Weight $totalWeight
     * return CreatePickupRequest
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    
    /**
     * Identifies the FedEx operating company (transportation) that is being sent the package pickup request.
     *
     * @param \FedEx\Pickup\SimpleType\CarrierCodeType|string $carrierCode
     * return CreatePickupRequest
     */
    public function setCarrierCode($carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Identifies the number of oversize packages that are being tendered to FedEx for this pickup request. Please refer to the FedEx Service Guide for package size limits to determine if a package is oversized for the service being shipped.
     *
     * @param positiveInteger $oversizePackageCount
     * return CreatePickupRequest
     */
    public function setOversizePackageCount($oversizePackageCount)
    {
        $this->OversizePackageCount = $oversizePackageCount;
        return $this;
    }
    
    /**
     * Identifies any remarks or comments to be passed to the FedEx courier picking up the shipment.
     *
     * @param string $remarks
     * return CreatePickupRequest
     */
    public function setRemarks($remarks)
    {
        $this->Remarks = $remarks;
        return $this;
    }
    
    /**
     * Identifies the type of commodity being shipped. This element is required for an international shipment.
     *
     * @param string $commodityDescription
     * return CreatePickupRequest
     */
    public function setCommodityDescription($commodityDescription)
    {
        $this->CommodityDescription = $commodityDescription;
        return $this;
    }
    
    /**
     * Describes the country relationship (domestic and/or international) among the shipments being picked up.
     *
     * @param \FedEx\Pickup\SimpleType\CountryRelationshipType|string $countryRelationship
     * return CreatePickupRequest
     */
    public function setCountryRelationship($countryRelationship)
    {
        $this->CountryRelationship = $countryRelationship;
        return $this;
    }
    

    
}