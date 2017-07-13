<?php
namespace FedEx\LocatorService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data about the various drop off services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 *
 * @property boolean $Express
 * @property boolean $Ground
 * @property boolean $FedExStaffed
 * @property boolean $FedExSelfService
 * @property boolean $FedExAuthorizedShippingCenter
 * @property boolean $LatestExpressDropoff
 * @property string $ExpressDropoffAfterTime
 * @property boolean $HoldAtLocation
 * @property boolean $GroundHoldAtLocation
 * @property boolean $DangerousGoods
 * @property boolean $SaturdayService
 * @property boolean $PackingSupplies
 * @property boolean $PackingServices
 * @property boolean $ReturnSystem
 * @property \FedEx\LocatorService\SimpleType\RedirectToHoldLocationType|string $RedirectToHoldLocation
 * @property boolean $SearchSameStateOnly

 */
class DropoffServicesDesired extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DropoffServicesDesired';

    /**
     * Locations that accept FedEx Express shipments.
     *
     * @param boolean $express
     * @return $this
     */
    public function setExpress($express)
    {
        $this->values['Express'] = $express;
        return $this;
    }

    /**
     * Locations that accept FedEx Ground shipments.
     *
     * @param boolean $ground
     * @return $this
     */
    public function setGround($ground)
    {
        $this->values['Ground'] = $ground;
        return $this;
    }

    /**
     * Locations that are FedEx staffed.
     *
     * @param boolean $fedExStaffed
     * @return $this
     */
    public function setFedExStaffed($fedExStaffed)
    {
        $this->values['FedExStaffed'] = $fedExStaffed;
        return $this;
    }

    /**
     * Locations that are FedEx self-service.
     *
     * @param boolean $fedExSelfService
     * @return $this
     */
    public function setFedExSelfService($fedExSelfService)
    {
        $this->values['FedExSelfService'] = $fedExSelfService;
        return $this;
    }

    /**
     * Locations that are FedEx Authorized Shipping Centers.
     *
     * @param boolean $fedExAuthorizedShippingCenter
     * @return $this
     */
    public function setFedExAuthorizedShippingCenter($fedExAuthorizedShippingCenter)
    {
        $this->values['FedExAuthorizedShippingCenter'] = $fedExAuthorizedShippingCenter;
        return $this;
    }

    /**
     * Locations with the latest Express drop-off time.
     *
     * @param boolean $latestExpressDropoff
     * @return $this
     */
    public function setLatestExpressDropoff($latestExpressDropoff)
    {
        $this->values['LatestExpressDropoff'] = $latestExpressDropoff;
        return $this;
    }

    /**
     * Locations that are open after this local time.
     *
     * @param string $expressDropoffAfterTime
     * @return $this
     */
    public function setExpressDropoffAfterTime($expressDropoffAfterTime)
    {
        $this->values['ExpressDropoffAfterTime'] = $expressDropoffAfterTime;
        return $this;
    }

    /**
     * Locations that support Express Hold at Location.
     *
     * @param boolean $holdAtLocation
     * @return $this
     */
    public function setHoldAtLocation($holdAtLocation)
    {
        $this->values['HoldAtLocation'] = $holdAtLocation;
        return $this;
    }

    /**
     * Locations that support Ground Hold at Location.
     *
     * @param boolean $groundHoldAtLocation
     * @return $this
     */
    public function setGroundHoldAtLocation($groundHoldAtLocation)
    {
        $this->values['GroundHoldAtLocation'] = $groundHoldAtLocation;
        return $this;
    }

    /**
     * Locations that accept FedEx Express shipments containing hazardous materials.
     *
     * @param boolean $dangerousGoods
     * @return $this
     */
    public function setDangerousGoods($dangerousGoods)
    {
        $this->values['DangerousGoods'] = $dangerousGoods;
        return $this;
    }

    /**
     * Locations open on Saturdays.
     *
     * @param boolean $saturdayService
     * @return $this
     */
    public function setSaturdayService($saturdayService)
    {
        $this->values['SaturdayService'] = $saturdayService;
        return $this;
    }

    /**
     * Locations that make packaging supplies available.
     *
     * @param boolean $packingSupplies
     * @return $this
     */
    public function setPackingSupplies($packingSupplies)
    {
        $this->values['PackingSupplies'] = $packingSupplies;
        return $this;
    }

    /**
     * Locations that provide Pack and Ship services.
     *
     * @param boolean $packingServices
     * @return $this
     */
    public function setPackingServices($packingServices)
    {
        $this->values['PackingServices'] = $packingServices;
        return $this;
    }

    /**
     * Locations that support FedExReturn System.
     *
     * @param boolean $returnSystem
     * @return $this
     */
    public function setReturnSystem($returnSystem)
    {
        $this->values['ReturnSystem'] = $returnSystem;
        return $this;
    }

    /**
     * Locations that support Redirect to Hold of shipments.
     *
     * @param \FedEx\LocatorService\SimpleType\RedirectToHoldLocationType|string $redirectToHoldLocation
     * @return $this
     */
    public function setRedirectToHoldLocation($redirectToHoldLocation)
    {
        $this->values['RedirectToHoldLocation'] = $redirectToHoldLocation;
        return $this;
    }

    /**
     * Locations in the same state that support Redirect to Hold of shipments.
     *
     * @param boolean $searchSameStateOnly
     * @return $this
     */
    public function setSearchSameStateOnly($searchSameStateOnly)
    {
        $this->values['SearchSameStateOnly'] = $searchSameStateOnly;
        return $this;
    }
}
