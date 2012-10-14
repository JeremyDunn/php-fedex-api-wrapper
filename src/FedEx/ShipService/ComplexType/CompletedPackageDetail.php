<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedPackageDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedPackageDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedPackageDetail';

    /**
     * The package sequence number of this package in a multiple piece shipment.
     *
     * @param positiveInteger $sequenceNumber
     * return CompletedPackageDetail
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * The Tracking number and form id for this package.
     *
     * @param TrackingId[] $trackingIds
     * return CompletedPackageDetail
     */
    public function setTrackingIds(array $trackingIds)
    {
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    
    /**
     * Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     *
     * @param nonNegativeInteger $groupNumber
     * return CompletedPackageDetail
     */
    public function setGroupNumber($groupNumber)
    {
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    
    /**
     * Oversize class for this package.
     *
     * @param \FedEx\ShipService\SimpleType\OversizeClassType|string $oversizeClass
     * return CompletedPackageDetail
     */
    public function setOversizeClass($oversizeClass)
    {
        $this->OversizeClass = $oversizeClass;
        return $this;
    }
    
    /**
     * All package-level rating data for this package, which may include data for multiple rate types.
     *
     * @param PackageRating $packageRating
     * return CompletedPackageDetail
     */
    public function setPackageRating(PackageRating $packageRating)
    {
        $this->PackageRating = $packageRating;
        return $this;
    }
    
    /**
     * Set OperationalDetail
     *
     * @param PackageOperationalDetail $operationalDetail
     * return CompletedPackageDetail
     */
    public function setOperationalDetail(PackageOperationalDetail $operationalDetail)
    {
        $this->OperationalDetail = $operationalDetail;
        return $this;
    }
    
    /**
     * The label image or printer commands to print the label.
     *
     * @param ShippingDocument $label
     * return CompletedPackageDetail
     */
    public function setLabel(ShippingDocument $label)
    {
        $this->Label = $label;
        return $this;
    }
    
    /**
     * All package-level shipping documents (other than labels and barcodes). For use in loads after January, 2008.
     *
     * @param ShippingDocument[] $packageDocuments
     * return CompletedPackageDetail
     */
    public function setPackageDocuments(array $packageDocuments)
    {
        $this->PackageDocuments = $packageDocuments;
        return $this;
    }
    
    /**
     * Specifies the information associated with this package that has COD special service in a ground shipment.
     *
     * @param CodReturnPackageDetail $codReturnDetail
     * return CompletedPackageDetail
     */
    public function setCodReturnDetail(CodReturnPackageDetail $codReturnDetail)
    {
        $this->CodReturnDetail = $codReturnDetail;
        return $this;
    }
    
    /**
     * Actual signature option applied, to allow for cases in which the original value conflicted with other service features in the shipment.
     *
     * @param \FedEx\ShipService\SimpleType\SignatureOptionType|string $signatureOption
     * return CompletedPackageDetail
     */
    public function setSignatureOption($signatureOption)
    {
        $this->SignatureOption = $signatureOption;
        return $this;
    }
    
    /**
     * Set DryIceWeight
     *
     * @param Weight $dryIceWeight
     * return CompletedPackageDetail
     */
    public function setDryIceWeight(Weight $dryIceWeight)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    
    /**
     * Documents the kinds and quantities of all hazardous commodities in the current package, using updated hazardous commodity description data.
     *
     * @param CompletedHazardousPackageDetail $hazardousPackageDetail
     * return CompletedPackageDetail
     */
    public function setHazardousPackageDetail(CompletedHazardousPackageDetail $hazardousPackageDetail)
    {
        $this->HazardousPackageDetail = $hazardousPackageDetail;
        return $this;
    }
    

    
}