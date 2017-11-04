<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Uniquely identifies a consolidation, which is a logical container for a collection of shipments.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\ConsolidationType|string $Type
 * @property string $Index
 * @property string $Date

 */
class ConsolidationKey extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ConsolidationKey';

    /**
     * Specifies the type of consolidation.
     *
     * @param \FedEx\RateService\SimpleType\ConsolidationType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Uniquely identifies the consolidation, within a given type and date.
     *
     * @param string $index
     * @return $this
     */
    public function setIndex($index)
    {
        $this->values['Index'] = $index;
        return $this;
    }

    /**
     * The date on which the consolidation was created.
     *
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->values['Date'] = $date;
        return $this;
    }
}
