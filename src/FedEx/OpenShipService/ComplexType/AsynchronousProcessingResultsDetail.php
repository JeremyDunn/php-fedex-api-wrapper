<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AsynchronousProcessingResultsDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\AsynchronousProcessingResultType|string[] $Options

 */
class AsynchronousProcessingResultsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AsynchronousProcessingResultsDetail';

    /**
     * Set Options
     *
     * @param \FedEx\OpenShipService\SimpleType\AsynchronousProcessingResultType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }
}
