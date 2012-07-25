<?php
namespace FedEx\LocatorService\ComplexType;

/**
 * The descriptive data about the various drop off services.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 */
class DropoffServicesDesired
    extends AbstractComplexType
{
    protected $_name = 'DropoffServicesDesired';

    /**
     * Locations that accept FedEx Express shipments.
     *
     * @param boolean $Express
     * return DropoffServicesDesired
     */
    public function setExpress($express)
    {
        $this->Express = $express;
        return $this;
    }
    
    /**
     * Locations that accept FedEx Ground shipments.
     *
     * @param boolean $Ground
     * return DropoffServicesDesired
     */
    public function setGround($ground)
    {
        $this->Ground = $ground;
        return $this;
    }
    
    /**
     * Locations that are FedEx staffed.
     *
     * @param boolean $FedExStaffed
     * return DropoffServicesDesired
     */
    public function setFedExStaffed($fedExStaffed)
    {
        $this->FedExStaffed = $fedExStaffed;
        return $this;
    }
    
    /**
     * Locations that are FedEx self-service.
     *
     * @param boolean $FedExSelfService
     * return DropoffServicesDesired
     */
    public function setFedExSelfService($fedExSelfService)
    {
        $this->FedExSelfService = $fedExSelfService;
        return $this;
    }
    
    /**
     * Locations that are FedEx Authorized Shipping Centers.
     *
     * @param boolean $FedExAuthorizedShippingCenter
     * return DropoffServicesDesired
     */
    public function setFedExAuthorizedShippingCenter($fedExAuthorizedShippingCenter)
    {
        $this->FedExAuthorizedShippingCenter = $fedExAuthorizedShippingCenter;
        return $this;
    }
    
    /**
     * Locations with the latest Express drop-off time.
     *
     * @param boolean $LatestExpressDropoff
     * return DropoffServicesDesired
     */
    public function setLatestExpressDropoff($latestExpressDropoff)
    {
        $this->LatestExpressDropoff = $latestExpressDropoff;
        return $this;
    }
    
    /**
     * Locations that are open after this local time.
     *
     * @param time $ExpressDropoffAfterTime
     * return DropoffServicesDesired
     */
    public function setExpressDropoffAfterTime(time $expressDropoffAfterTime)
    {
        $this->ExpressDropoffAfterTime = $expressDropoffAfterTime;
        return $this;
    }
    
    /**
     * Locations that support Express Hold at Location.
     *
     * @param boolean $HoldAtLocation
     * return DropoffServicesDesired
     */
    public function setHoldAtLocation($holdAtLocation)
    {
        $this->HoldAtLocation = $holdAtLocation;
        return $this;
    }
    
    /**
     * Locations that support Ground Hold at Location.
     *
     * @param boolean $GroundHoldAtLocation
     * return DropoffServicesDesired
     */
    public function setGroundHoldAtLocation($groundHoldAtLocation)
    {
        $this->GroundHoldAtLocation = $groundHoldAtLocation;
        return $this;
    }
    
    /**
     * Locations that accept FedEx Express shipments containing hazardous materials.
     *
     * @param boolean $DangerousGoods
     * return DropoffServicesDesired
     */
    public function setDangerousGoods($dangerousGoods)
    {
        $this->DangerousGoods = $dangerousGoods;
        return $this;
    }
    
    /**
     * Locations open on Saturdays.
     *
     * @param boolean $SaturdayService
     * return DropoffServicesDesired
     */
    public function setSaturdayService($saturdayService)
    {
        $this->SaturdayService = $saturdayService;
        return $this;
    }
    
    /**
     * Locations that make packaging supplies available.
     *
     * @param boolean $PackingSupplies
     * return DropoffServicesDesired
     */
    public function setPackingSupplies($packingSupplies)
    {
        $this->PackingSupplies = $packingSupplies;
        return $this;
    }
    
    /**
     * Locations that provide Pack and Ship services.
     *
     * @param boolean $PackingServices
     * return DropoffServicesDesired
     */
    public function setPackingServices($packingServices)
    {
        $this->PackingServices = $packingServices;
        return $this;
    }
    
    /**
     * Locations that support FedEx	Return System.
     *
     * @param boolean $ReturnSystem
     * return DropoffServicesDesired
     */
    public function setReturnSystem($returnSystem)
    {
        $this->ReturnSystem = $returnSystem;
        return $this;
    }
    
    /**
     * Locations that support Redirect to Hold of shipments.
     *
     * @param RedirectToHoldLocationType $RedirectToHoldLocation
     * return DropoffServicesDesired
     */
    public function setRedirectToHoldLocation(\FedEx\LocatorService\SimpleType\RedirectToHoldLocationType $redirectToHoldLocation)
    {
        $this->RedirectToHoldLocation = $redirectToHoldLocation;
        return $this;
    }
    
    /**
     * Locations in the same state that support Redirect to Hold of shipments.
     *
     * @param boolean $SearchSameStateOnly
     * return DropoffServicesDesired
     */
    public function setSearchSameStateOnly($searchSameStateOnly)
    {
        $this->SearchSameStateOnly = $searchSameStateOnly;
        return $this;
    }
    

    
}