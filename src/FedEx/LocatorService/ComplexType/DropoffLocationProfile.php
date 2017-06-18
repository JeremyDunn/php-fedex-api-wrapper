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
 * @property boolean $ExpressService
 * @property boolean $GroundService
 * @property string $HoursWeekdays
 * @property string $HoursSaturdays
 * @property string $LastExpressDropoffTimeWeekdays
 * @property string $LastExpressDropoffTimeSaturdays
 * @property string $LastGroundDropoffTimeWeekdays
 * @property string $LastGroundDropoffTimeSaturdays
 * @property boolean $HoldAtLocation
 * @property boolean $GroundHoldAtLocation
 * @property boolean $DangerousGoods
 * @property boolean $PackagingSupplies
 * @property boolean $PackagingServices
 * @property boolean $ReturnSystem

 */
class DropoffLocationProfile extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DropoffLocationProfile';

    /**
     * Identifies if this location offers FedEx Express services.
     *
     * @param boolean $expressService
     * @return $this
     */
    public function setExpressService($expressService)
    {
        $this->values['ExpressService'] = $expressService;
        return $this;
    }

    /**
     * Identifies if this location offers FedEx Ground service.
     *
     * @param boolean $groundService
     * @return $this
     */
    public function setGroundService($groundService)
    {
        $this->values['GroundService'] = $groundService;
        return $this;
    }

    /**
     * This location's weekday (Monday-Friday) hours of operation.
     *
     * @param string $hoursWeekdays
     * @return $this
     */
    public function setHoursWeekdays($hoursWeekdays)
    {
        $this->values['HoursWeekdays'] = $hoursWeekdays;
        return $this;
    }

    /**
     * This location's Saturday hours of operation.
     *
     * @param string $hoursSaturdays
     * @return $this
     */
    public function setHoursSaturdays($hoursSaturdays)
    {
        $this->values['HoursSaturdays'] = $hoursSaturdays;
        return $this;
    }

    /**
     * The time of day on weekdays by which FedEx Express packages must be dropped off for shipment that day.
     *
     * @param string $lastExpressDropoffTimeWeekdays
     * @return $this
     */
    public function setLastExpressDropoffTimeWeekdays($lastExpressDropoffTimeWeekdays)
    {
        $this->values['LastExpressDropoffTimeWeekdays'] = $lastExpressDropoffTimeWeekdays;
        return $this;
    }

    /**
     * The time of day on Saturdays by which FedEx Express packages must be dropped off for shipment that day.
     *
     * @param string $lastExpressDropoffTimeSaturdays
     * @return $this
     */
    public function setLastExpressDropoffTimeSaturdays($lastExpressDropoffTimeSaturdays)
    {
        $this->values['LastExpressDropoffTimeSaturdays'] = $lastExpressDropoffTimeSaturdays;
        return $this;
    }

    /**
     * The time of day on weekdays by which FedEx Ground packages must be dropped off for shipment that day.
     *
     * @param string $lastGroundDropoffTimeWeekdays
     * @return $this
     */
    public function setLastGroundDropoffTimeWeekdays($lastGroundDropoffTimeWeekdays)
    {
        $this->values['LastGroundDropoffTimeWeekdays'] = $lastGroundDropoffTimeWeekdays;
        return $this;
    }

    /**
     * The time of day on Saturdays by which FedEx Ground packages must be dropped off for shipment that day.
     *
     * @param string $lastGroundDropoffTimeSaturdays
     * @return $this
     */
    public function setLastGroundDropoffTimeSaturdays($lastGroundDropoffTimeSaturdays)
    {
        $this->values['LastGroundDropoffTimeSaturdays'] = $lastGroundDropoffTimeSaturdays;
        return $this;
    }

    /**
     * Identifies if this location offers Express HAL (Hold at Location) service.
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
     * Identifies if this location offers Ground HAL (Hold at Location) service.
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
     * Identifies if this location accepts Hazardous materials.
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
     * Identifies if this location makes packaging supplies available.
     *
     * @param boolean $packagingSupplies
     * @return $this
     */
    public function setPackagingSupplies($packagingSupplies)
    {
        $this->values['PackagingSupplies'] = $packagingSupplies;
        return $this;
    }

    /**
     * Identifies if this location provides Pack and Ship services.
     *
     * @param boolean $packagingServices
     * @return $this
     */
    public function setPackagingServices($packagingServices)
    {
        $this->values['PackagingServices'] = $packagingServices;
        return $this;
    }

    /**
     * Identifies if this location supports FedEx Return System.
     *
     * @param boolean $returnSystem
     * @return $this
     */
    public function setReturnSystem($returnSystem)
    {
        $this->values['ReturnSystem'] = $returnSystem;
        return $this;
    }
}
