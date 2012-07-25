<?php
namespace FedEx\PickupService\ComplexType;

/**
 * The descriptive data for taxpayer identification information.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class TaxpayerIdentification
    extends AbstractComplexType
{
    protected $_name = 'TaxpayerIdentification';

    /**
     * Identifies the category of the taxpayer identification number. See TinType for the list of values.
     *
     * @param TinType $TinType
     * return TaxpayerIdentification
     */
    public function setTinType(\FedEx\PickupService\SimpleType\TinType $tinType)
    {
        $this->TinType = $tinType;
        return $this;
    }
    
    /**
     * Identifies the taxpayer identification number.
     *
     * @param string $Number
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
     * @param string $Usage
     * return TaxpayerIdentification
     */
    public function setUsage($usage)
    {
        $this->Usage = $usage;
        return $this;
    }
    

    
}