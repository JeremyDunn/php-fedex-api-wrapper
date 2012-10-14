<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the results of processing for the COD special service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedCodDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedCodDetail';

    /**
     * Set CollectionAmount
     *
     * @param Money $collectionAmount
     * return CompletedCodDetail
     */
    public function setCollectionAmount(Money $collectionAmount)
    {
        $this->CollectionAmount = $collectionAmount;
        return $this;
    }
    
    /**
     * Set AdjustmentType
     *
     * @param \FedEx\ShipService\SimpleType\CodAdjustmentType|string $adjustmentType
     * return CompletedCodDetail
     */
    public function setAdjustmentType($adjustmentType)
    {
        $this->AdjustmentType = $adjustmentType;
        return $this;
    }
    

    
}