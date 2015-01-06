<?php
namespace FedEx\LocatorService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data about the various drop off services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 */
class DropoffServicesDesired
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DropoffServicesDesired';

    /**
     * Locations that accept FedEx Express shipments.
     *
     * @param boolean $express
     * @return DropoffServicesDesired
     */
    public function setExpress($express)
    {
        $this->Express = $express;
        return $this;
    }
    
    /**
     * Returns Locations that accept FedEx Express shipments.
     *
     * @return boolean
     */
    public function getExpress()
    {
        return $this->Express;
    }
    
    /**
     * Locations that accept FedEx Ground shipments.
     *
     * @param boolean $ground
     * @return DropoffServicesDesired
     */
    public function setGround($ground)
    {
        $this->Ground = $ground;
        return $this;
    }
    
    /**
     * Returns Locations that accept FedEx Ground shipments.
     *
     * @return boolean
     */
    public function getGround()
    {
        return $this->Ground;
    }
    
    /**
     * Locations that are FedEx staffed.
     *
     * @param boolean $fedExStaffed
     * @return DropoffServicesDesired
     */
    public function setFedExStaffed($fedExStaffed)
    {
        $this->FedExStaffed = $fedExStaffed;
        return $this;
    }
    
    /**
     * Returns Locations that are FedEx staffed.
     *
     * @return boolean
     */
    public function getFedExStaffed()
    {
        return $this->FedExStaffed;
    }
    
    /**
     * Locations that are FedEx self-service.
     *
     * @param boolean $fedExSelfService
     * @return DropoffServicesDesired
     */
    public function setFedExSelfService($fedExSelfService)
    {
        $this->FedExSelfService = $fedExSelfService;
        return $this;
    }
    
    /**
     * Returns Locations that are FedEx self-service.
     *
     * @return boolean
     */
    public function getFedExSelfService()
    {
        return $this->FedExSelfService;
    }
    
    /**
     * Locations that are FedEx Authorized Shipping Centers.
     *
     * @param boolean $fedExAuthorizedShippingCenter
     * @return DropoffServicesDesired
     */
    public function setFedExAuthorizedShippingCenter($fedExAuthorizedShippingCenter)
    {
        $this->FedExAuthorizedShippingCenter = $fedExAuthorizedShippingCenter;
        return $this;
    }
    
    /**
     * Returns Locations that are FedEx Authorized Shipping Centers.
     *
     * @return boolean
     */
    public function getFedExAuthorizedShippingCenter()
    {
        return $this->FedExAuthorizedShippingCenter;
    }
    
    /**
     * Locations with the latest Express drop-off time.
     *
     * @param boolean $latestExpressDropoff
     * @return DropoffServicesDesired
     */
    public function setLatestExpressDropoff($latestExpressDropoff)
    {
        $this->LatestExpressDropoff = $latestExpressDropoff;
        return $this;
    }
    
    /**
     * Returns Locations with the latest Express drop-off time.
     *
     * @return boolean
     */
    public function getLatestExpressDropoff()
    {
        return $this->LatestExpressDropoff;
    }
    
    /**
     * Locations that are open after this local time.
     *
     * @param time $expressDropoffAfterTime
     * @return DropoffServicesDesired
     */
    public function setExpressDropoffAfterTime(time $expressDropoffAfterTime)
    {
        $this->ExpressDropoffAfterTime = $expressDropoffAfterTime;
        return $this;
    }
    
    /**
     * Returns Locations that are open after this local time.
     *
     * @return time
     */
    public function getExpressDropoffAfterTime()
    {
        return $this->ExpressDropoffAfterTime;
    }
    
    /**
     * Locations that support Express Hold at Location.
     *
     * @param boolean $holdAtLocation
     * @return DropoffServicesDesired
     */
    public function setHoldAtLocation($holdAtLocation)
    {
        $this->HoldAtLocation = $holdAtLocation;
        return $this;
    }
    
    /**
     * Returns Locations that support Express Hold at Location.
     *
     * @return boolean
     */
    public function getHoldAtLocation()
    {
        return $this->HoldAtLocation;
    }
    
    /**
     * Locations that support Ground Hold at Location.
     *
     * @param boolean $groundHoldAtLocation
     * @return DropoffServicesDesired
     */
    public function setGroundHoldAtLocation($groundHoldAtLocation)
    {
        $this->GroundHoldAtLocation = $groundHoldAtLocation;
        return $this;
    }
    
    /**
     * Returns Locations that support Ground Hold at Location.
     *
     * @return boolean
     */
    public function getGroundHoldAtLocation()
    {
        return $this->GroundHoldAtLocation;
    }
    
    /**
     * Locations that accept FedEx Express shipments containing hazardous materials.
     *
     * @param boolean $dangerousGoods
     * @return DropoffServicesDesired
     */
    public function setDangerousGoods($dangerousGoods)
    {
        $this->DangerousGoods = $dangerousGoods;
        return $this;
    }
    
    /**
     * Returns Locations that accept FedEx Express shipments containing hazardous materials.
     *
     * @return boolean
     */
    public function getDangerousGoods()
    {
        return $this->DangerousGoods;
    }
    
    /**
     * Locations open on Saturdays.
     *
     * @param boolean $saturdayService
     * @return DropoffServicesDesired
     */
    public function setSaturdayService($saturdayService)
    {
        $this->SaturdayService = $saturdayService;
        return $this;
    }
    
    /**
     * Returns Locations open on Saturdays.
     *
     * @return boolean
     */
    public function getSaturdayService()
    {
        return $this->SaturdayService;
    }
    
    /**
     * Locations that make packaging supplies available.
     *
     * @param boolean $packingSupplies
     * @return DropoffServicesDesired
     */
    public function setPackingSupplies($packingSupplies)
    {
        $this->PackingSupplies = $packingSupplies;
        return $this;
    }
    
    /**
     * Returns Locations that make packaging supplies available.
     *
     * @return boolean
     */
    public function getPackingSupplies()
    {
        return $this->PackingSupplies;
    }
    
    /**
     * Locations that provide Pack and Ship services.
     *
     * @param boolean $packingServices
     * @return DropoffServicesDesired
     */
    public function setPackingServices($packingServices)
    {
        $this->PackingServices = $packingServices;
        return $this;
    }
    
    /**
     * Returns Locations that provide Pack and Ship services.
     *
     * @return boolean
     */
    public function getPackingServices()
    {
        return $this->PackingServices;
    }
    
    /**
     * Locations that support FedEx	Return System.
     *
     * @param boolean $returnSystem
     * @return DropoffServicesDesired
     */
    public function setReturnSystem($returnSystem)
    {
        $this->ReturnSystem = $returnSystem;
        return $this;
    }
    
    /**
     * Returns Locations that support FedEx	Return System.
     *
     * @return boolean
     */
    public function getReturnSystem()
    {
        return $this->ReturnSystem;
    }
    
    /**
     * Locations that support Redirect to Hold of shipments.
     *
     * @param \FedEx\LocatorService\SimpleType\RedirectToHoldLocationType|string $redirectToHoldLocation
     * @return DropoffServicesDesired
     */
    public function setRedirectToHoldLocation($redirectToHoldLocation)
    {
        $this->RedirectToHoldLocation = $redirectToHoldLocation;
        return $this;
    }
    
    /**
     * Returns Locations that support Redirect to Hold of shipments.
     *
     * @return \FedEx\LocatorService\SimpleType\RedirectToHoldLocationType|string
     */
    public function getRedirectToHoldLocation()
    {
        return $this->RedirectToHoldLocation;
    }
    
    /**
     * Locations in the same state that support Redirect to Hold of shipments.
     *
     * @param boolean $searchSameStateOnly
     * @return DropoffServicesDesired
     */
    public function setSearchSameStateOnly($searchSameStateOnly)
    {
        $this->SearchSameStateOnly = $searchSameStateOnly;
        return $this;
    }
    
    /**
     * Returns Locations in the same state that support Redirect to Hold of shipments.
     *
     * @return boolean
     */
    public function getSearchSameStateOnly()
    {
        return $this->SearchSameStateOnly;
    }
    

    
}