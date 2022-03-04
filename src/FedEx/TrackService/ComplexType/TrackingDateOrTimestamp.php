<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackingDateOrTimestamp
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\TrackingDateOrTimestampType|string $Type
 * @property string $DateOrTimestamp

 */
class TrackingDateOrTimestamp extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackingDateOrTimestamp';

    /**
     * Set Type
     *
     * @param \FedEx\TrackService\SimpleType\TrackingDateOrTimestampType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set DateOrTimestamp
     *
     * @param string $dateOrTimestamp
     * @return $this
     */
    public function setDateOrTimestamp($dateOrTimestamp)
    {
        $this->values['DateOrTimestamp'] = $dateOrTimestamp;
        return $this;
    }
}
