<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Customer-provided specifications for handling individual commodities.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\HazardousCommodityLabelTextOptionType|string $LabelTextOption
 * @property string $CustomerSuppliedLabelText

 */
class HazardousCommodityOptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'HazardousCommodityOptionDetail';

    /**
     * Specifies how the customer wishes the label text to be handled for this commodity in this package.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\HazardousCommodityLabelTextOptionType|string $labelTextOption
     * @return $this
     */
    public function setLabelTextOption($labelTextOption)
    {
        $this->values['LabelTextOption'] = $labelTextOption;
        return $this;
    }

    /**
     * Text used in labeling the commodity under control of the labelTextOption field.
     *
     * @param string $customerSuppliedLabelText
     * @return $this
     */
    public function setCustomerSuppliedLabelText($customerSuppliedLabelText)
    {
        $this->values['CustomerSuppliedLabelText'] = $customerSuppliedLabelText;
        return $this;
    }
}
