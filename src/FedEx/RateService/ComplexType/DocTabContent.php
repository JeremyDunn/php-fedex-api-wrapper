<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabContent
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\DocTabContentType|string $DocTabContentType
 * @property DocTabContentZone001 $Zone001
 * @property DocTabContentBarcoded $Barcoded

 */
class DocTabContent extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DocTabContent';

    /**
     * Set DocTabContentType
     *
     * @param \FedEx\RateService\SimpleType\DocTabContentType|string $docTabContentType
     * @return $this
     */
    public function setDocTabContentType($docTabContentType)
    {
        $this->values['DocTabContentType'] = $docTabContentType;
        return $this;
    }

    /**
     * Set Zone001
     *
     * @param DocTabContentZone001 $zone001
     * @return $this
     */
    public function setZone001(DocTabContentZone001 $zone001)
    {
        $this->values['Zone001'] = $zone001;
        return $this;
    }

    /**
     * Set Barcoded
     *
     * @param DocTabContentBarcoded $barcoded
     * @return $this
     */
    public function setBarcoded(DocTabContentBarcoded $barcoded)
    {
        $this->values['Barcoded'] = $barcoded;
        return $this;
    }
}
