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
class DropoffLocationProfile
    extends AbstractComplexType
{
    protected $_name = 'DropoffLocationProfile';

    /**
     * Identifies if this location offers FedEx Express services.
     *
     * @param boolean $ExpressService
     * return DropoffLocationProfile
     */
    public function setExpressService($expressService)
    {
        $this->ExpressService = $expressService;
        return $this;
    }
    
    /**
     * Identifies if this location offers FedEx Ground service.
     *
     * @param boolean $GroundService
     * return DropoffLocationProfile
     */
    public function setGroundService($groundService)
    {
        $this->GroundService = $groundService;
        return $this;
    }
    
    /**
     * This location's weekday (Monday-Friday) hours of operation.
     *
     * @param string $HoursWeekdays
     * return DropoffLocationProfile
     */
    public function setHoursWeekdays($hoursWeekdays)
    {
        $this->HoursWeekdays = $hoursWeekdays;
        return $this;
    }
    
    /**
     * This location's Saturday hours of operation.
     *
     * @param string $HoursSaturdays
     * return DropoffLocationProfile
     */
    public function setHoursSaturdays($hoursSaturdays)
    {
        $this->HoursSaturdays = $hoursSaturdays;
        return $this;
    }
    
    /**
     * The time of day on weekdays by which FedEx Express packages must be dropped off for shipment that day.
     *
     * @param string $LastExpressDropoffTimeWeekdays
     * return DropoffLocationProfile
     */
    public function setLastExpressDropoffTimeWeekdays($lastExpressDropoffTimeWeekdays)
    {
        $this->LastExpressDropoffTimeWeekdays = $lastExpressDropoffTimeWeekdays;
        return $this;
    }
    
    /**
     * The time of day on Saturdays by which FedEx Express packages must be dropped off for shipment that day.
     *
     * @param string $LastExpressDropoffTimeSaturdays
     * return DropoffLocationProfile
     */
    public function setLastExpressDropoffTimeSaturdays($lastExpressDropoffTimeSaturdays)
    {
        $this->LastExpressDropoffTimeSaturdays = $lastExpressDropoffTimeSaturdays;
        return $this;
    }
    
    /**
     * The time of day on weekdays by which FedEx Ground packages must be dropped off for shipment that day.
     *
     * @param string $LastGroundDropoffTimeWeekdays
     * return DropoffLocationProfile
     */
    public function setLastGroundDropoffTimeWeekdays($lastGroundDropoffTimeWeekdays)
    {
        $this->LastGroundDropoffTimeWeekdays = $lastGroundDropoffTimeWeekdays;
        return $this;
    }
    
    /**
     * The time of day on Saturdays by which FedEx Ground packages must be dropped off for shipment that day.
     *
     * @param string $LastGroundDropoffTimeSaturdays
     * return DropoffLocationProfile
     */
    public function setLastGroundDropoffTimeSaturdays($lastGroundDropoffTimeSaturdays)
    {
        $this->LastGroundDropoffTimeSaturdays = $lastGroundDropoffTimeSaturdays;
        return $this;
    }
    
    /**
     * Identifies if this location offers Express HAL (Hold at Location) service.
     *
     * @param boolean $HoldAtLocation
     * return DropoffLocationProfile
     */
    public function setHoldAtLocation($holdAtLocation)
    {
        $this->HoldAtLocation = $holdAtLocation;
        return $this;
    }
    
    /**
     * Identifies if this location offers Ground HAL (Hold at Location) service.
     *
     * @param boolean $GroundHoldAtLocation
     * return DropoffLocationProfile
     */
    public function setGroundHoldAtLocation($groundHoldAtLocation)
    {
        $this->GroundHoldAtLocation = $groundHoldAtLocation;
        return $this;
    }
    
    /**
     * Identifies if this location accepts Hazardous materials.
     *
     * @param boolean $DangerousGoods
     * return DropoffLocationProfile
     */
    public function setDangerousGoods($dangerousGoods)
    {
        $this->DangerousGoods = $dangerousGoods;
        return $this;
    }
    
    /**
     * Identifies if this location makes packaging supplies available.
     *
     * @param boolean $PackagingSupplies
     * return DropoffLocationProfile
     */
    public function setPackagingSupplies($packagingSupplies)
    {
        $this->PackagingSupplies = $packagingSupplies;
        return $this;
    }
    
    /**
     * Identifies if this location provides Pack and Ship services.
     *
     * @param boolean $PackagingServices
     * return DropoffLocationProfile
     */
    public function setPackagingServices($packagingServices)
    {
        $this->PackagingServices = $packagingServices;
        return $this;
    }
    
    /**
     * Identifies if this location supports FedEx Return System.
     *
     * @param boolean $ReturnSystem
     * return DropoffLocationProfile
     */
    public function setReturnSystem($returnSystem)
    {
        $this->ReturnSystem = $returnSystem;
        return $this;
    }
    

    
}