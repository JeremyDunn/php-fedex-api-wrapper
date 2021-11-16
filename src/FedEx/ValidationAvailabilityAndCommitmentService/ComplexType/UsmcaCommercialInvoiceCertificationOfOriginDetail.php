<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UsmcaCommercialInvoiceCertificationOfOriginDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property ShippingDocumentFormat $Format
 * @property CustomerImageUsage[] $CustomerImageUsages
 * @property string $FormVersion
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\UsmcaCertifierSpecificationType|string $CertifierSpecification
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\UsmcaProducerSpecificationType|string $ProducerSpecification
 * @property Party $Producer

 */
class UsmcaCommercialInvoiceCertificationOfOriginDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UsmcaCommercialInvoiceCertificationOfOriginDetail';

    /**
     * Set Format
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
     * Set CustomerImageUsages
     *
     * @param CustomerImageUsage[] $customerImageUsages
     * @return $this
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->values['CustomerImageUsages'] = $customerImageUsages;
        return $this;
    }

    /**
     * Set FormVersion
     *
     * @param string $formVersion
     * @return $this
     */
    public function setFormVersion($formVersion)
    {
        $this->values['FormVersion'] = $formVersion;
        return $this;
    }

    /**
     * Set CertifierSpecification
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\UsmcaCertifierSpecificationType|string $certifierSpecification
     * @return $this
     */
    public function setCertifierSpecification($certifierSpecification)
    {
        $this->values['CertifierSpecification'] = $certifierSpecification;
        return $this;
    }

    /**
     * Set ProducerSpecification
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\UsmcaProducerSpecificationType|string $producerSpecification
     * @return $this
     */
    public function setProducerSpecification($producerSpecification)
    {
        $this->values['ProducerSpecification'] = $producerSpecification;
        return $this;
    }

    /**
     * Set Producer
     *
     * @param Party $producer
     * @return $this
     */
    public function setProducer(Party $producer)
    {
        $this->values['Producer'] = $producer;
        return $this;
    }
}
