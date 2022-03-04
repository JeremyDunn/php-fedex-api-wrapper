<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PackageDocument
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property int $SequenceNumber
 * @property ShippingDocument[] $ShippingDocuments

 */
class PackageDocument extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PackageDocument';

    /**
     * The sequence number of the package to which the following shipping documents apply.
     *
     * @param int $sequenceNumber
     * @return $this
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->values['SequenceNumber'] = $sequenceNumber;
        return $this;
    }

    /**
     * All shipping documents, including labels and barcodes, that apply to the indicated package.
     *
     * @param ShippingDocument[] $shippingDocuments
     * @return $this
     */
    public function setShippingDocuments(array $shippingDocuments)
    {
        $this->values['ShippingDocuments'] = $shippingDocuments;
        return $this;
    }
}
