<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomDeliveryWindowDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\CustomDeliveryWindowType|string $Type
 * @property string $RequestTime
 * @property DateRange $RequestRange
 * @property string $RequestDate

 */
class CustomDeliveryWindowDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomDeliveryWindowDetail';

    /**
     * Indicates the type of custom delivery being requested.
     *
     * @param \FedEx\ShipService\SimpleType\CustomDeliveryWindowType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Time by which delivery is requested.
     *
     * @param string $requestTime
     * @return $this
     */
    public function setRequestTime($requestTime)
    {
        $this->values['RequestTime'] = $requestTime;
        return $this;
    }

    /**
     * Range of dates for custom delivery request; only used if type is BETWEEN.
     *
     * @param DateRange $requestRange
     * @return $this
     */
    public function setRequestRange(DateRange $requestRange)
    {
        $this->values['RequestRange'] = $requestRange;
        return $this;
    }

    /**
     * Date for custom delivery request; only used for types of ON, BETWEEN, or AFTER.
     *
     * @param string $requestDate
     * @return $this
     */
    public function setRequestDate($requestDate)
    {
        $this->values['RequestDate'] = $requestDate;
        return $this;
    }
}
