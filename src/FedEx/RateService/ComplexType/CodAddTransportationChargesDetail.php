<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CodAddTransportationChargesDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\RateTypeBasisType|string $RateTypeBasis
 * @property \FedEx\RateService\SimpleType\CodAddTransportationChargeBasisType|string $ChargeBasis
 * @property \FedEx\RateService\SimpleType\ChargeBasisLevelType|string $ChargeBasisLevel

 */
class CodAddTransportationChargesDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CodAddTransportationChargesDetail';

    /**
     * Select the type of rate from which the element is to be selected.
     *
     * @param \FedEx\RateService\SimpleType\RateTypeBasisType|string $rateTypeBasis
     * @return $this
     */
    public function setRateTypeBasis($rateTypeBasis)
    {
        $this->values['RateTypeBasis'] = $rateTypeBasis;
        return $this;
    }

    /**
     * Set ChargeBasis
     *
     * @param \FedEx\RateService\SimpleType\CodAddTransportationChargeBasisType|string $chargeBasis
     * @return $this
     */
    public function setChargeBasis($chargeBasis)
    {
        $this->values['ChargeBasis'] = $chargeBasis;
        return $this;
    }

    /**
     * Set ChargeBasisLevel
     *
     * @param \FedEx\RateService\SimpleType\ChargeBasisLevelType|string $chargeBasisLevel
     * @return $this
     */
    public function setChargeBasisLevel($chargeBasisLevel)
    {
        $this->values['ChargeBasisLevel'] = $chargeBasisLevel;
        return $this;
    }
}
