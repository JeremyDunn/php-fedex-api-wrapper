<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for taxpayer identification information.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\TinType|string $TinType
 * @property string $Number
 * @property string $Usage

 */
class TaxpayerIdentification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TaxpayerIdentification';

    /**
     * Identifies the category of the taxpayer identification number. See TinType for the list of values.
     *
     * @param \FedEx\PickupService\SimpleType\TinType|string $tinType
     * @return $this
     */
    public function setTinType($tinType)
    {
        $this->values['TinType'] = $tinType;
        return $this;
    }

    /**
     * Identifies the taxpayer identification number.
     *
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->values['Number'] = $number;
        return $this;
    }

    /**
     * Identifies the usage of Tax Identification Number in Shipment processing
     *
     * @param string $usage
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->values['Usage'] = $usage;
        return $this;
    }

    
}
