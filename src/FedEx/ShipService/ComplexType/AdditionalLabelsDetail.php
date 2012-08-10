<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies additional labels to be produced. All required labels for shipments will be produced without the need to request additional labels. These are only available as thermal labels.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class AdditionalLabelsDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AdditionalLabelsDetail';

    /**
     * The type of additional labels to return.
     *
     * @param \FedEx\ShipService\SimpleType\AdditionalLabelsType|string $type
     * return AdditionalLabelsDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * The number of this type label to return
     *
     * @param nonNegativeInteger $count
     * return AdditionalLabelsDetail
     */
    public function setCount($count)
    {
        $this->Count = $count;
        return $this;
    }
    

    
}