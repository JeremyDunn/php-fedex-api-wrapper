<?php
namespace FedEx\RateService\ComplexType;

/**
 * Customer-provided specifications for handling individual commodities.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class HazardousCommodityOptionDetail
    extends AbstractComplexType
{
    protected $_name = 'HazardousCommodityOptionDetail';

    /**
     * Specifies how the customer wishes the label text to be handled for this commodity in this package.
     *
     * @param HazardousCommodityLabelTextOptionType $LabelTextOption
     * return HazardousCommodityOptionDetail
     */
    public function setLabelTextOption(\FedEx\RateService\SimpleType\HazardousCommodityLabelTextOptionType $labelTextOption)
    {
        $this->LabelTextOption = $labelTextOption;
        return $this;
    }
    
    /**
     * Text used in labeling the commodity under control of the labelTextOption field.
     *
     * @param string $CustomerSuppliedLabelText
     * return HazardousCommodityOptionDetail
     */
    public function setCustomerSuppliedLabelText($customerSuppliedLabelText)
    {
        $this->CustomerSuppliedLabelText = $customerSuppliedLabelText;
        return $this;
    }
    

    
}