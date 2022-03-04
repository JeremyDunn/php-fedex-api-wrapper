<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the 1421c form for dangerous goods shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property ShippingDocumentFormat $Format
 * @property CustomerImageUsage[] $CustomerImageUsages

 */
class DangerousGoodsShippersDeclarationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DangerousGoodsShippersDeclarationDetail';

    /**
     * Specifies characteristics of a shipping document to be produced.
     *
     * @param ShippingDocumentFormat $format
     * @return $this
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->values['Format'] = $format;
        return $this;
    }

    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param CustomerImageUsage[] $customerImageUsages
     * @return $this
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->values['CustomerImageUsages'] = $customerImageUsages;
        return $this;
    }
}
