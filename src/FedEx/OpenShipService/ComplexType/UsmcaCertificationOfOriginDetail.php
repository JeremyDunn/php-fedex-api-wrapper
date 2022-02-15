<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UsmcaCertificationOfOriginDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property ShippingDocumentFormat $Format
 * @property DateRange $BlanketPeriod
 * @property \FedEx\OpenShipService\SimpleType\UsmcaCertifierSpecificationType|string $CertifierSpecification
 * @property \FedEx\OpenShipService\SimpleType\UsmcaImporterSpecificationType|string $ImporterSpecification
 * @property \FedEx\OpenShipService\SimpleType\UsmcaProducerSpecificationType|string $ProducerSpecification
 * @property Party $Producer
 * @property CustomerImageUsage[] $CustomerImageUsages

 */
class UsmcaCertificationOfOriginDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UsmcaCertificationOfOriginDetail';

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
     * Set BlanketPeriod
     *
     * @param DateRange $blanketPeriod
     * @return $this
     */
    public function setBlanketPeriod(DateRange $blanketPeriod)
    {
        $this->values['BlanketPeriod'] = $blanketPeriod;
        return $this;
    }

    /**
     * Set CertifierSpecification
     *
     * @param \FedEx\OpenShipService\SimpleType\UsmcaCertifierSpecificationType|string $certifierSpecification
     * @return $this
     */
    public function setCertifierSpecification($certifierSpecification)
    {
        $this->values['CertifierSpecification'] = $certifierSpecification;
        return $this;
    }

    /**
     * Set ImporterSpecification
     *
     * @param \FedEx\OpenShipService\SimpleType\UsmcaImporterSpecificationType|string $importerSpecification
     * @return $this
     */
    public function setImporterSpecification($importerSpecification)
    {
        $this->values['ImporterSpecification'] = $importerSpecification;
        return $this;
    }

    /**
     * Set ProducerSpecification
     *
     * @param \FedEx\OpenShipService\SimpleType\UsmcaProducerSpecificationType|string $producerSpecification
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
}
