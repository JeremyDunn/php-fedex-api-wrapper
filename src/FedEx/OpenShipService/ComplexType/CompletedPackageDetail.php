<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedPackageDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property int $SequenceNumber
 * @property TrackingId[] $TrackingIds
 * @property int $GroupNumber
 * @property \FedEx\OpenShipService\SimpleType\OversizeClassType|string $OversizeClass
 * @property PackageRating $PackageRating
 * @property PackageOperationalDetail $OperationalDetail
 * @property ShippingDocument $Label
 * @property ShippingDocument[] $PackageDocuments
 * @property CodReturnPackageDetail $CodReturnDetail
 * @property \FedEx\OpenShipService\SimpleType\SignatureOptionType|string $SignatureOption
 * @property Weight $DryIceWeight
 * @property CompletedHazardousPackageDetail $HazardousPackageDetail

 */
class CompletedPackageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CompletedPackageDetail';

    /**
     * Set SequenceNumber
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
     * Set TrackingIds
     *
     * @param TrackingId[] $trackingIds
     * @return $this
     */
    public function setTrackingIds(array $trackingIds)
    {
        $this->values['TrackingIds'] = $trackingIds;
        return $this;
    }

    /**
     * Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     *
     * @param int $groupNumber
     * @return $this
     */
    public function setGroupNumber($groupNumber)
    {
        $this->values['GroupNumber'] = $groupNumber;
        return $this;
    }

    /**
     * Set OversizeClass
     *
     * @param \FedEx\OpenShipService\SimpleType\OversizeClassType|string $oversizeClass
     * @return $this
     */
    public function setOversizeClass($oversizeClass)
    {
        $this->values['OversizeClass'] = $oversizeClass;
        return $this;
    }

    /**
     * All package-level rating data for this package, which may include data for multiple rate types.
     *
     * @param PackageRating $packageRating
     * @return $this
     */
    public function setPackageRating(PackageRating $packageRating)
    {
        $this->values['PackageRating'] = $packageRating;
        return $this;
    }

    /**
     * Set OperationalDetail
     *
     * @param PackageOperationalDetail $operationalDetail
     * @return $this
     */
    public function setOperationalDetail(PackageOperationalDetail $operationalDetail)
    {
        $this->values['OperationalDetail'] = $operationalDetail;
        return $this;
    }

    /**
     * Set Label
     *
     * @param ShippingDocument $label
     * @return $this
     */
    public function setLabel(ShippingDocument $label)
    {
        $this->values['Label'] = $label;
        return $this;
    }

    /**
     * All package-level shipping documents (other than labels and barcodes). For use in loads after January, 2008.
     *
     * @param ShippingDocument[] $packageDocuments
     * @return $this
     */
    public function setPackageDocuments(array $packageDocuments)
    {
        $this->values['PackageDocuments'] = $packageDocuments;
        return $this;
    }

    /**
     * Specifies the information associated with this package that has COD special service in a ground shipment.
     *
     * @param CodReturnPackageDetail $codReturnDetail
     * @return $this
     */
    public function setCodReturnDetail(CodReturnPackageDetail $codReturnDetail)
    {
        $this->values['CodReturnDetail'] = $codReturnDetail;
        return $this;
    }

    /**
     * Actual signature option applied, to allow for cases in which the original value conflicted with other service features in the shipment.
     *
     * @param \FedEx\OpenShipService\SimpleType\SignatureOptionType|string $signatureOption
     * @return $this
     */
    public function setSignatureOption($signatureOption)
    {
        $this->values['SignatureOption'] = $signatureOption;
        return $this;
    }

    /**
     * Set DryIceWeight
     *
     * @param Weight $dryIceWeight
     * @return $this
     */
    public function setDryIceWeight(Weight $dryIceWeight)
    {
        $this->values['DryIceWeight'] = $dryIceWeight;
        return $this;
    }

    /**
     * Documents the kinds and quantities of all hazardous commodities in the current package, using updated hazardous commodity description data.
     *
     * @param CompletedHazardousPackageDetail $hazardousPackageDetail
     * @return $this
     */
    public function setHazardousPackageDetail(CompletedHazardousPackageDetail $hazardousPackageDetail)
    {
        $this->values['HazardousPackageDetail'] = $hazardousPackageDetail;
        return $this;
    }
}
