<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PendingShipmentProcessingOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\PendingShipmentProcessingOptionType|string[] $Options

 */
class PendingShipmentProcessingOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PendingShipmentProcessingOptionsRequested';

    /**
     * Set Options
     *
     * @param \FedEx\UploadDocumentService\SimpleType\PendingShipmentProcessingOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }
}
