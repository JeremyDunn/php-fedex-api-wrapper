<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a Certificate of Origin document. Remaining content (business data) to be defined once requirements have been completed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property ShippingDocumentFormat $Format
 * @property DateRange $BlanketPeriod
 * @property \FedEx\ShipService\SimpleType\NaftaImporterSpecificationType|string $ImporterSpecification
 * @property Contact $SignatureContact
 * @property \FedEx\ShipService\SimpleType\NaftaProducerSpecificationType|string $ProducerSpecification
 * @property NaftaProducer[] $Producers
 * @property CustomerImageUsage[] $CustomerImageUsages

 */
class NaftaCertificateOfOriginDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'NaftaCertificateOfOriginDetail';

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
     * Indicates which Party (if any) from the shipment is to be used as the source of importer data on the NAFTA COO form.
     *
     * @param \FedEx\ShipService\SimpleType\NaftaImporterSpecificationType|string $importerSpecification
     * @return $this
     */
    public function setImporterSpecification($importerSpecification)
    {
        $this->values['ImporterSpecification'] = $importerSpecification;
        return $this;
    }

    /**
     * Contact information for "Authorized Signature" area of form.
     *
     * @param Contact $signatureContact
     * @return $this
     */
    public function setSignatureContact(Contact $signatureContact)
    {
        $this->values['SignatureContact'] = $signatureContact;
        return $this;
    }

    /**
     * Set ProducerSpecification
     *
     * @param \FedEx\ShipService\SimpleType\NaftaProducerSpecificationType|string $producerSpecification
     * @return $this
     */
    public function setProducerSpecification($producerSpecification)
    {
        $this->values['ProducerSpecification'] = $producerSpecification;
        return $this;
    }

    /**
     * Set Producers
     *
     * @param NaftaProducer[] $producers
     * @return $this
     */
    public function setProducers(array $producers)
    {
        $this->values['Producers'] = $producers;
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
