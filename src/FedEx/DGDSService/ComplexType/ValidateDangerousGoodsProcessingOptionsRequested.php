<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ValidateDangerousGoodsProcessingOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property \FedEx\DGDSService\SimpleType\ValidateDangerousGoodsProcessingOptionType|string[] $Options

 */
class ValidateDangerousGoodsProcessingOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ValidateDangerousGoodsProcessingOptionsRequested';

    /**
     * Set Options
     *
     * @param \FedEx\DGDSService\SimpleType\ValidateDangerousGoodsProcessingOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }
}
