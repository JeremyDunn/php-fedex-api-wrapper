<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data to schedule a FedEx package pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class CourierDispatchRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CourierDispatchRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * return CourierDispatchRequest
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
     * return CourierDispatchRequest
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
     * return CourierDispatchRequest
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
     * return CourierDispatchRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Descriptive data about the origin of the shipment being picked up by FedEx.
     *
     * @param CourierDispatchOriginDetail $originDetail
     * return CourierDispatchRequest
     */
    public function setOriginDetail(CourierDispatchOriginDetail $originDetail)
    {
        $this->OriginDetail = $originDetail;
        return $this;
    }
    
    /**
     * Descriptive data for a freight shipment being picked up by FedEx. This is element is only required when requesting a freight service pickup.
     *
     * @param CourierDispatchFreightDetail $freightDetail
     * return CourierDispatchRequest
     */
    public function setFreightDetail(CourierDispatchFreightDetail $freightDetail)
    {
        $this->FreightDetail = $freightDetail;
        return $this;
    }
    
    /**
     * Identifies the number of packages that are being tendered to FedEx for this pickup request.
     *
     * @param  $packageCount
     * return CourierDispatchRequest
     */
    public function setPackageCount( $packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * Identifies the total weight of the package or packages being tendered to FedEx for this pickup request.
     *
     * @param Weight $totalWeight
     * return CourierDispatchRequest
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    
    /**
     * Identifies the FedEx operating company (transportation) that is being sent the package pickup request.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\CarrierCodeType|string $carrierCode
     * return CourierDispatchRequest
     */
    public function setCarrierCode($carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Identifies the number of oversize packages that are being tendered to FedEx for this pickup request. Please refer to the FedEx Service Guide for package size limits to determine if a package is oversized for the service being shipped.
     *
     * @param  $oversizePackageCount
     * return CourierDispatchRequest
     */
    public function setOversizePackageCount( $oversizePackageCount)
    {
        $this->OversizePackageCount = $oversizePackageCount;
        return $this;
    }
    
    /**
     * Identifies any remarks or comments to be passed to the FedEx courier picking up the shipment.
     *
     * @param string $courierRemarks
     * return CourierDispatchRequest
     */
    public function setCourierRemarks($courierRemarks)
    {
        $this->CourierRemarks = $courierRemarks;
        return $this;
    }
    
    /**
     * Identifies the type of commodity being shipped. This element is required for an international shipment.
     *
     * @param string $commodityDescription
     * return CourierDispatchRequest
     */
    public function setCommodityDescription($commodityDescription)
    {
        $this->CommodityDescription = $commodityDescription;
        return $this;
    }
    

    
}