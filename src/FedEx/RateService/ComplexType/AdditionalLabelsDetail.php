<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies additional labels to be produced. All required labels for shipments will be produced without the need to request additional labels. These are only available as thermal labels.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class AdditionalLabelsDetail
    extends AbstractComplexType
{
    protected $_name = 'AdditionalLabelsDetail';

    /**
     * The type of additional labels to return.
     *
     * @param AdditionalLabelsType $Type
     * return AdditionalLabelsDetail
     */
    public function setType(\FedEx\RateService\SimpleType\AdditionalLabelsType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * The number of this type label to return
     *
     * @param nonNegativeInteger $Count
     * return AdditionalLabelsDetail
     */
    public function setCount($count)
    {
        $this->Count = $count;
        return $this;
    }
    

    
}