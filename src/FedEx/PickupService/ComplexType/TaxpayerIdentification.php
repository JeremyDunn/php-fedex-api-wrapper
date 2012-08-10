<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for taxpayer identification information.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class TaxpayerIdentification
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TaxpayerIdentification';

    /**
     * Identifies the category of the taxpayer identification number. See TinType for the list of values.
     *
     * @param \FedEx\Pickup\SimpleType\TinType|string $tinType
     * return TaxpayerIdentification
     */
    public function setTinType($tinType)
    {
        $this->TinType = $tinType;
        return $this;
    }
    
    /**
     * Identifies the taxpayer identification number.
     *
     * @param string $number
     * return TaxpayerIdentification
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * Identifies the usage of Tax Identification Number in Shipment processing
     *
     * @param string $usage
     * return TaxpayerIdentification
     */
    public function setUsage($usage)
    {
        $this->Usage = $usage;
        return $this;
    }
    

    
}