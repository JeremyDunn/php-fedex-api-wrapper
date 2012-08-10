<?php
namespace FedEx\PackageMovementInformationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data which is used to determine which FedEx Express services are available between an origin and destination. To check the availability of one particular FedEx Express service and packaging type, include the Service and Packaging elements in the request message. Only information regarding that single service and packaging type will be returned from the request. To obtain a list of all available services for a given origin and destination, omit the Service and Packaging elements from the request. In this case the reply will contain every available service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class ServiceAvailabilityRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ServiceAvailabilityRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * return ServiceAvailabilityRequest
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
     * return ServiceAvailabilityRequest
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
     * return ServiceAvailabilityRequest
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
     * return ServiceAvailabilityRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The descriptive data for the physical location from which the shipment originates.
     *
     * @param Address $origin
     * return ServiceAvailabilityRequest
     */
    public function setOrigin(Address $origin)
    {
        $this->Origin = $origin;
        return $this;
    }
    
    /**
     * The descriptive data for the physical location to which the shipment is destined.
     *
     * @param Address $destination
     * return ServiceAvailabilityRequest
     */
    public function setDestination(Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * The date on which the package will be shipped. The date should not  be a past date or a date more than 10 days in the future. The date format must be YYYY-MM-DD.
     *
     * @param date $shipDate
     * return ServiceAvailabilityRequest
     */
    public function setShipDate($shipDate)
    {
        $this->ShipDate = $shipDate;
        return $this;
    }
    
    /**
     * Optionally supplied instead of service to restrict reply to services for a specific carrier.
     *
     * @param \FedEx\PackageMovementInformationService\SimpleType\CarrierCodeType|string $carrierCode
     * return ServiceAvailabilityRequest
     */
    public function setCarrierCode($carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Restricts reply to single service, if supplied.
     *
     * @param \FedEx\PackageMovementInformationService\SimpleType\ServiceType|string $service
     * return ServiceAvailabilityRequest
     */
    public function setService($service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Identifies the FedEx packaging type used by the requestor for the package. See PackagingType for valid values. Omit this element and the Service element to get a list of every available service.
     *
     * @param \FedEx\PackageMovementInformationService\SimpleType\PackagingType|string $packaging
     * return ServiceAvailabilityRequest
     */
    public function setPackaging($packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    

    
}