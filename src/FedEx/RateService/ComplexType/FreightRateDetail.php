<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Rate data specific to FedEx Freight or FedEx National Freight services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FreightRateDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightRateDetail';

    /**
     * A unique identifier for a specific rate quotation.
     *
     * @param string $quoteNumber
     * @return FreightRateDetail
     */
    public function setQuoteNumber($quoteNumber)
    {
        $this->QuoteNumber = $quoteNumber;
        return $this;
    }
    
    /**
     * Returns A unique identifier for a specific rate quotation.
     *
     * @return string
     */
    public function getQuoteNumber()
    {
        return $this->QuoteNumber;
    }
    
    /**
     * Specifies how total base charge is determined.
     *
     * @param \FedEx\RateService\SimpleType\FreightBaseChargeCalculationType|string $baseChargeCalculation
     * @return FreightRateDetail
     */
    public function setBaseChargeCalculation($baseChargeCalculation)
    {
        $this->BaseChargeCalculation = $baseChargeCalculation;
        return $this;
    }
    
    /**
     * Returns Specifies how total base charge is determined.
     *
     * @return \FedEx\RateService\SimpleType\FreightBaseChargeCalculationType|string
     */
    public function getBaseChargeCalculation()
    {
        return $this->BaseChargeCalculation;
    }
    
    /**
     * Freight charges which accumulate to the total base charge for the shipment.
     *
     * @param FreightBaseCharge[] $baseCharges
     * @return FreightRateDetail
     */
    public function setBaseCharges(array $baseCharges)
    {
        $this->BaseCharges = $baseCharges;
        return $this;
    }
    
    /**
     * Returns Freight charges which accumulate to the total base charge for the shipment.
     *
     * @return FreightBaseCharge[]
     */
    public function getBaseCharges()
    {
        return $this->BaseCharges;
    }
    
    /**
     * Human-readable descriptions of additional information on this shipment rating.
     *
     * @param FreightRateNotation[] $notations
     * @return FreightRateDetail
     */
    public function setNotations(array $notations)
    {
        $this->Notations = $notations;
        return $this;
    }
    
    /**
     * Returns Human-readable descriptions of additional information on this shipment rating.
     *
     * @return FreightRateNotation[]
     */
    public function getNotations()
    {
        return $this->Notations;
    }
    

    
}