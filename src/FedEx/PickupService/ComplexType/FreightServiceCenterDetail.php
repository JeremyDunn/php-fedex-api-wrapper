<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class describes the relationship between a customer-specified address and the FedEx Freight / FedEx National Freight Service Center that supports that address.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
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
     * @return FreightServiceCenterDetail
     */
    public function setInterlineCarrierCode($interlineCarrierCode)
    {
        $this->InterlineCarrierCode = $interlineCarrierCode;
        return $this;
    }
    
    /**
     * Returns Freight Industry standard non-FedEx carrier identification
     *
     * @return string
     */
    public function getInterlineCarrierCode()
    {
        return $this->InterlineCarrierCode;
    }
    
    /**
     * The name of the Interline carrier.
     *
     * @param string $interlineCarrierName
     * @return FreightServiceCenterDetail
     */
    public function setInterlineCarrierName($interlineCarrierName)
    {
        $this->InterlineCarrierName = $interlineCarrierName;
        return $this;
    }
    
    /**
     * Returns The name of the Interline carrier.
     *
     * @return string
     */
    public function getInterlineCarrierName()
    {
        return $this->InterlineCarrierName;
    }
    
    /**
     * Additional time it might take at the origin or destination to pickup or deliver the freight. This is usually due to the remoteness of the location. This time is included in the total transit time.
     *
     * @param int $additionalDays
     * @return FreightServiceCenterDetail
     */
    public function setAdditionalDays($additionalDays)
    {
        $this->AdditionalDays = $additionalDays;
        return $this;
    }
    
    /**
     * Returns Additional time it might take at the origin or destination to pickup or deliver the freight. This is usually due to the remoteness of the location. This time is included in the total transit time.
     *
     * @return int
     */
    public function getAdditionalDays()
    {
        return $this->AdditionalDays;
    }
    
    /**
     * Service branding which may be used for local pickup or delivery, distinct from service used for line-haul of customer's shipment.
     *
     * @param \FedEx\Pickup\SimpleType\ServiceType|string $localService
     * @return FreightServiceCenterDetail
     */
    public function setLocalService($localService)
    {
        $this->LocalService = $localService;
        return $this;
    }
    
    /**
     * Returns Service branding which may be used for local pickup or delivery, distinct from service used for line-haul of customer's shipment.
     *
     * @return \FedEx\Pickup\SimpleType\ServiceType|string
     */
    public function getLocalService()
    {
        return $this->LocalService;
    }
    
    /**
     * Distance between customer address (pickup or delivery) and the supporting Freight / National Freight service center.
     *
     * @param Distance $localDistance
     * @return FreightServiceCenterDetail
     */
    public function setLocalDistance(Distance $localDistance)
    {
        $this->LocalDistance = $localDistance;
        return $this;
    }
    
    /**
     * Returns Distance between customer address (pickup or delivery) and the supporting Freight / National Freight service center.
     *
     * @return Distance
     */
    public function getLocalDistance()
    {
        return $this->LocalDistance;
    }
    
    /**
     * Time to travel between customer address (pickup or delivery) and the supporting Freight / National Freight service center.
     *
     * @param duration $localDuration
     * @return FreightServiceCenterDetail
     */
    public function setLocalDuration(duration $localDuration)
    {
        $this->LocalDuration = $localDuration;
        return $this;
    }
    
    /**
     * Returns Time to travel between customer address (pickup or delivery) and the supporting Freight / National Freight service center.
     *
     * @return duration
     */
    public function getLocalDuration()
    {
        return $this->LocalDuration;
    }
    
    /**
     * Specifies when/how the customer can arrange for pickup or delivery.
     *
     * @param \FedEx\Pickup\SimpleType\FreightServiceSchedulingType|string $localServiceScheduling
     * @return FreightServiceCenterDetail
     */
    public function setLocalServiceScheduling($localServiceScheduling)
    {
        $this->LocalServiceScheduling = $localServiceScheduling;
        return $this;
    }
    
    /**
     * Returns Specifies when/how the customer can arrange for pickup or delivery.
     *
     * @return \FedEx\Pickup\SimpleType\FreightServiceSchedulingType|string
     */
    public function getLocalServiceScheduling()
    {
        return $this->LocalServiceScheduling;
    }
    
    /**
     * Specifies days of operation if localServiceScheduling is LIMITED.
     *
     * @param DayOfWeekType[] $limitedServiceDays
     * @return FreightServiceCenterDetail
     */
    public function setLimitedServiceDays(array $limitedServiceDays)
    {
        $this->LimitedServiceDays = $limitedServiceDays;
        return $this;
    }
    
    /**
     * Returns Specifies days of operation if localServiceScheduling is LIMITED.
     *
     * @return DayOfWeekType[]
     */
    public function getLimitedServiceDays()
    {
        return $this->LimitedServiceDays;
    }
    
    /**
     * Freight service center that is a gateway on the border of Canada or Mexico.
     *
     * @param string $gatewayLocationId
     * @return FreightServiceCenterDetail
     */
    public function setGatewayLocationId($gatewayLocationId)
    {
        $this->GatewayLocationId = $gatewayLocationId;
        return $this;
    }
    
    /**
     * Returns Freight service center that is a gateway on the border of Canada or Mexico.
     *
     * @return string
     */
    public function getGatewayLocationId()
    {
        return $this->GatewayLocationId;
    }
    
    /**
     * Alphabetical code identifying a Freight Service Center
     *
     * @param string $location
     * @return FreightServiceCenterDetail
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Returns Alphabetical code identifying a Freight Service Center
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }
    
    /**
     * Freight service center Contact and Address
     *
     * @param ContactAndAddress $contactAndAddress
     * @return FreightServiceCenterDetail
     */
    public function setContactAndAddress(ContactAndAddress $contactAndAddress)
    {
        $this->ContactAndAddress = $contactAndAddress;
        return $this;
    }
    
    /**
     * Returns Freight service center Contact and Address
     *
     * @return ContactAndAddress
     */
    public function getContactAndAddress()
    {
        return $this->ContactAndAddress;
    }
    

    
}