<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class describes the relationship between a customer-specified address and the FedEx Freight / FedEx National Freight Service Center that supports that address.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FreightServiceCenterDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightServiceCenterDetail';

    /**
     * Freight Industry standard non-FedEx carrier identification
     *
     * @param string $interlineCarrierCode
     * return FreightServiceCenterDetail
     */
    public function setInterlineCarrierCode($interlineCarrierCode)
    {
        $this->InterlineCarrierCode = $interlineCarrierCode;
        return $this;
    }
    
    /**
     * The name of the Interline carrier.
     *
     * @param string $interlineCarrierName
     * return FreightServiceCenterDetail
     */
    public function setInterlineCarrierName($interlineCarrierName)
    {
        $this->InterlineCarrierName = $interlineCarrierName;
        return $this;
    }
    
    /**
     * Additional time it might take at the origin or destination to pickup or deliver the freight. This is usually due to the remoteness of the location. This time is included in the total transit time.
     *
     * @param int $additionalDays
     * return FreightServiceCenterDetail
     */
    public function setAdditionalDays($additionalDays)
    {
        $this->AdditionalDays = $additionalDays;
        return $this;
    }
    
    /**
     * Service branding which may be used for local pickup or delivery, distinct from service used for line-haul of customer's shipment.
     *
     * @param \FedEx\RateService\SimpleType\ServiceType|string $localService
     * return FreightServiceCenterDetail
     */
    public function setLocalService($localService)
    {
        $this->LocalService = $localService;
        return $this;
    }
    
    /**
     * Distance between customer address (pickup or delivery) and the supporting Freight / National Freight service center.
     *
     * @param Distance $localDistance
     * return FreightServiceCenterDetail
     */
    public function setLocalDistance(Distance $localDistance)
    {
        $this->LocalDistance = $localDistance;
        return $this;
    }
    
    /**
     * Time to travel between customer address (pickup or delivery) and the supporting Freight / National Freight service center.
     *
     * @param duration $localDuration
     * return FreightServiceCenterDetail
     */
    public function setLocalDuration(duration $localDuration)
    {
        $this->LocalDuration = $localDuration;
        return $this;
    }
    
    /**
     * Specifies when/how the customer can arrange for pickup or delivery.
     *
     * @param \FedEx\RateService\SimpleType\FreightServiceSchedulingType|string $localServiceScheduling
     * return FreightServiceCenterDetail
     */
    public function setLocalServiceScheduling($localServiceScheduling)
    {
        $this->LocalServiceScheduling = $localServiceScheduling;
        return $this;
    }
    
    /**
     * Specifies days of operation if localServiceScheduling is LIMITED.
     *
     * @param DayOfWeekType[] $limitedServiceDays
     * return FreightServiceCenterDetail
     */
    public function setLimitedServiceDays(array $limitedServiceDays)
    {
        $this->LimitedServiceDays = $limitedServiceDays;
        return $this;
    }
    
    /**
     * Freight service center that is a gateway on the border of Canada or Mexico.
     *
     * @param string $gatewayLocationId
     * return FreightServiceCenterDetail
     */
    public function setGatewayLocationId($gatewayLocationId)
    {
        $this->GatewayLocationId = $gatewayLocationId;
        return $this;
    }
    
    /**
     * Alphabetical code identifying a Freight Service Center
     *
     * @param string $location
     * return FreightServiceCenterDetail
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Freight service center Contact and Address
     *
     * @param ContactAndAddress $contactAndAddress
     * return FreightServiceCenterDetail
     */
    public function setContactAndAddress(ContactAndAddress $contactAndAddress)
    {
        $this->ContactAndAddress = $contactAndAddress;
        return $this;
    }
    

    
}