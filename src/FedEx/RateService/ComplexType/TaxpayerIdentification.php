<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TaxpayerIdentification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * Set TinType
     *
     * @param \FedEx\RateService\SimpleType\TinType|string $tinType
     * @return TaxpayerIdentification
     */
    public function setTinType($tinType)
    {
        $this->TinType = $tinType;
        return $this;
    }
    
    /**
     * Returns Set TinType
     *
     * @return \FedEx\RateService\SimpleType\TinType|string
     */
    public function getTinType()
    {
        return $this->TinType;
    }
    
    /**
     * Set Number
     *
     * @param string $number
     * @return TaxpayerIdentification
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * Returns Set Number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }
    
    /**
     * Identifies the usage of Tax Identification Number in Shipment processing
     *
     * @param string $usage
     * @return TaxpayerIdentification
     */
    public function setUsage($usage)
    {
        $this->Usage = $usage;
        return $this;
    }
    
    /**
     * Returns Identifies the usage of Tax Identification Number in Shipment processing
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->Usage;
    }
    
    /**
     * Set EffectiveDate
     *
     * @param dateTime $effectiveDate
     * @return TaxpayerIdentification
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    
    /**
     * Returns Set EffectiveDate
     *
     * @return dateTime
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    
    /**
     * Set ExpirationDate
     *
     * @param dateTime $expirationDate
     * @return TaxpayerIdentification
     */
    public function setExpirationDate($expirationDate)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Returns Set ExpirationDate
     *
     * @return dateTime
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    

    
}