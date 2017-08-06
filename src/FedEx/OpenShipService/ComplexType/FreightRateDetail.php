<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Rate data specific to FedEx Freight or FedEx National Freight services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $QuoteNumber
 * @property \FedEx\OpenShipService\SimpleType\FreightRateQuoteType|string $QuoteType
 * @property \FedEx\OpenShipService\SimpleType\FreightBaseChargeCalculationType|string $BaseChargeCalculation
 * @property FreightBaseCharge[] $BaseCharges
 * @property FreightRateNotation[] $Notations

 */
class FreightRateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FreightRateDetail';

    /**
     * A unique identifier for a specific rate quotation.
     *
     * @param string $quoteNumber
     * @return $this
     */
    public function setQuoteNumber($quoteNumber)
    {
        $this->values['QuoteNumber'] = $quoteNumber;
        return $this;
    }

    /**
     * Specifies whether the rate quote was automated or manual.
     *
     * @param \FedEx\OpenShipService\SimpleType\FreightRateQuoteType|string $quoteType
     * @return $this
     */
    public function setQuoteType($quoteType)
    {
        $this->values['QuoteType'] = $quoteType;
        return $this;
    }

    /**
     * Specifies how total base charge is determined.
     *
     * @param \FedEx\OpenShipService\SimpleType\FreightBaseChargeCalculationType|string $baseChargeCalculation
     * @return $this
     */
    public function setBaseChargeCalculation($baseChargeCalculation)
    {
        $this->values['BaseChargeCalculation'] = $baseChargeCalculation;
        return $this;
    }

    /**
     * Freight charges which accumulate to the total base charge for the shipment.
     *
     * @param FreightBaseCharge[] $baseCharges
     * @return $this
     */
    public function setBaseCharges(array $baseCharges)
    {
        $this->values['BaseCharges'] = $baseCharges;
        return $this;
    }

    /**
     * Human-readable descriptions of additional information on this shipment rating.
     *
     * @param FreightRateNotation[] $notations
     * @return $this
     */
    public function setNotations(array $notations)
    {
        $this->values['Notations'] = $notations;
        return $this;
    }
}
