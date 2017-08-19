<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the way in which aggregated data in a consolidation are to be determined.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\ConsolidationDataType|string $Field
 * @property \FedEx\OpenShipService\SimpleType\ConsolidationDataSourceType|string $Source

 */
class ConsolidationDataSource extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ConsolidationDataSource';

    /**
     * Identifies the field being specified.
     *
     * @param \FedEx\OpenShipService\SimpleType\ConsolidationDataType|string $field
     * @return $this
     */
    public function setField($field)
    {
        $this->values['Field'] = $field;
        return $this;
    }

    /**
     * Identifies how the content of the field should be determined.
     *
     * @param \FedEx\OpenShipService\SimpleType\ConsolidationDataSourceType|string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->values['Source'] = $source;
        return $this;
    }
}
