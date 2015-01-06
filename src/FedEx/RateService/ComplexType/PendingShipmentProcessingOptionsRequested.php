<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PendingShipmentProcessingOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class PendingShipmentProcessingOptionsRequested
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PendingShipmentProcessingOptionsRequested';

    /**
     * Set Options
     *
     * @param PendingShipmentProcessingOptionType[] $options
     * @return PendingShipmentProcessingOptionsRequested
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns Set Options
     *
     * @return PendingShipmentProcessingOptionType[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    

    
}