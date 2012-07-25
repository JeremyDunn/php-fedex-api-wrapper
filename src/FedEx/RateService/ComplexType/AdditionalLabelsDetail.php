<?php
namespace FedEx\RateService\ComplexType;

/**
 * Specifies additional labels to be produced. All required labels for shipments will be produced without the need to request additional labels. These are only available as thermal labels.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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