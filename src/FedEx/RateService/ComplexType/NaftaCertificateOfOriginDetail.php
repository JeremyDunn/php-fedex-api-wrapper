<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a Certificate of Origin document. Remaining content (business data) to be defined once requirements have been completed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class NaftaCertificateOfOriginDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'NaftaCertificateOfOriginDetail';

    /**
     * Set Format
     *
     * @param ShippingDocumentFormat $format
     * return NaftaCertificateOfOriginDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Set BlanketPeriod
     *
     * @param DateRange $blanketPeriod
     * return NaftaCertificateOfOriginDetail
     */
    public function setBlanketPeriod(DateRange $blanketPeriod)
    {
        $this->BlanketPeriod = $blanketPeriod;
        return $this;
    }
    
    /**
     * Indicates which Party (if any) from the shipment is to be used as the source of importer data on the NAFTA COO form.
     *
     * @param \FedEx\RateService\SimpleType\NaftaImporterSpecificationType|string $importerSpecification
     * return NaftaCertificateOfOriginDetail
     */
    public function setImporterSpecification($importerSpecification)
    {
        $this->ImporterSpecification = $importerSpecification;
        return $this;
    }
    
    /**
     * Contact information for "Authorized Signature" area of form.
     *
     * @param Contact $signatureContact
     * return NaftaCertificateOfOriginDetail
     */
    public function setSignatureContact(Contact $signatureContact)
    {
        $this->SignatureContact = $signatureContact;
        return $this;
    }
    
    /**
     * Set ProducerSpecification
     *
     * @param \FedEx\RateService\SimpleType\NaftaProducerSpecificationType|string $producerSpecification
     * return NaftaCertificateOfOriginDetail
     */
    public function setProducerSpecification($producerSpecification)
    {
        $this->ProducerSpecification = $producerSpecification;
        return $this;
    }
    
    /**
     * Set Producers
     *
     * @param NaftaProducer[] $producers
     * return NaftaCertificateOfOriginDetail
     */
    public function setProducers(array $producers)
    {
        $this->Producers = $producers;
        return $this;
    }
    
    /**
     * Set CustomerImageUsages
     *
     * @param CustomerImageUsage[] $customerImageUsages
     * return NaftaCertificateOfOriginDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    

    
}