<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedPackageDetail
    extends AbstractComplexType
{
    protected $_name = 'CompletedPackageDetail';

    /**
     * The package sequence number of this package in a multiple piece shipment.
     *
     * @param positiveInteger $SequenceNumber
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
     * @param array[TrackingId] $TrackingIds
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
     * @param nonNegativeInteger $GroupNumber
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
     * @param OversizeClassType $OversizeClass
     * return CompletedPackageDetail
     */
    public function setOversizeClass(\FedEx\ShipService\SimpleType\OversizeClassType $oversizeClass)
    {
        $this->OversizeClass = $oversizeClass;
        return $this;
    }
    
    /**
     * All package-level rating data for this package, which may include data for multiple rate types.
     *
     * @param PackageRating $PackageRating
     * return CompletedPackageDetail
     */
    public function setPackageRating(PackageRating $packageRating)
    {
        $this->PackageRating = $packageRating;
        return $this;
    }
    
    /**
     * 
     *
     * @param PackageOperationalDetail $OperationalDetail
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
     * @param ShippingDocument $Label
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
     * @param array[ShippingDocument] $PackageDocuments
     * return CompletedPackageDetail
     */
    public function setPackageDocuments(array $packageDocuments)
    {
        $this->PackageDocuments = $packageDocuments;
        return $this;
    }
    
    /**
     * Information about the COD return shipment.
     *
     * @param CodReturnPackageDetail $CodReturnDetail
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
     * @param SignatureOptionType $SignatureOption
     * return CompletedPackageDetail
     */
    public function setSignatureOption(\FedEx\ShipService\SimpleType\SignatureOptionType $signatureOption)
    {
        $this->SignatureOption = $signatureOption;
        return $this;
    }
    
    /**
     * Documents the kinds and quantities of all hazardous commodities in the current package, using updated hazardous commodity description data.
     *
     * @param array[ValidatedHazardousCommodityContent] $HazardousCommodities
     * return CompletedPackageDetail
     */
    public function setHazardousCommodities(array $hazardousCommodities)
    {
        $this->HazardousCommodities = $hazardousCommodities;
        return $this;
    }
    

    
}