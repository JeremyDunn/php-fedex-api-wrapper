<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RequestedPackageLineItem
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property int $SequenceNumber
 * @property int $GroupNumber
 * @property int $GroupPackageCount
 * @property PackageStatusDetail $StatusDetail
 * @property TrackingId[] $TrackingIds
 * @property VariableHandlingChargeDetail $VariableHandlingChargeDetail
 * @property Money $InsuredValue
 * @property Weight $Weight
 * @property Dimensions $Dimensions
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PhysicalPackagingType|string $PhysicalPackaging
 * @property AssociatedFreightLineItemDetail[] $AssociatedFreightLineItems
 * @property string $ItemDescription
 * @property string $ItemDescriptionForClearance
 * @property CustomerReference[] $CustomerReferences
 * @property PackageSpecialServicesRequested $SpecialServicesRequested
 * @property PackageSpecialHandlingDetail $SpecialHandlingDetail
 * @property ContentRecord[] $ContentRecords
 * @property Commodity[] $Commodities
 * @property ShipperConveyanceDetail $ConveyanceDetail

 */
class RequestedPackageLineItem extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RequestedPackageLineItem';

    /**
     * A unique identifier of each requested package line item.
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
     * An identifier of each group of identical packages.
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
     * Used as the number or count of identical packages in a group.
     *
     * @param int $groupPackageCount
     * @return $this
     */
    public function setGroupPackageCount($groupPackageCount)
    {
        $this->values['GroupPackageCount'] = $groupPackageCount;
        return $this;
    }

    /**
     * Set StatusDetail
     *
     * @param PackageStatusDetail $statusDetail
     * @return $this
     */
    public function setStatusDetail(PackageStatusDetail $statusDetail)
    {
        $this->values['StatusDetail'] = $statusDetail;
        return $this;
    }

    /**
     * Only used when clients are assigning a tracking number to this package. Should not be used when groupPackageCount is greater than one.
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
     * Set VariableHandlingChargeDetail
     *
     * @param VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return $this
     */
    public function setVariableHandlingChargeDetail(VariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->values['VariableHandlingChargeDetail'] = $variableHandlingChargeDetail;
        return $this;
    }

    /**
     * Specifies the declared value for carriage of the package. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay, mis-delivery, nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the package.
     *
     * @param Money $insuredValue
     * @return $this
     */
    public function setInsuredValue(Money $insuredValue)
    {
        $this->values['InsuredValue'] = $insuredValue;
        return $this;
    }

    /**
     * Represents the gross weight of the package line item.
     *
     * @param Weight $weight
     * @return $this
     */
    public function setWeight(Weight $weight)
    {
        $this->values['Weight'] = $weight;
        return $this;
    }

    /**
     * Set Dimensions
     *
     * @param Dimensions $dimensions
     * @return $this
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->values['Dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Provides additional detail on how the customer has physically packaged this item. As of June 2009, required for packages moving under international and SmartPost services.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PhysicalPackagingType|string $physicalPackaging
     * @return $this
     */
    public function setPhysicalPackaging($physicalPackaging)
    {
        $this->values['PhysicalPackaging'] = $physicalPackaging;
        return $this;
    }

    /**
     * Set AssociatedFreightLineItems
     *
     * @param AssociatedFreightLineItemDetail[] $associatedFreightLineItems
     * @return $this
     */
    public function setAssociatedFreightLineItems(array $associatedFreightLineItems)
    {
        $this->values['AssociatedFreightLineItems'] = $associatedFreightLineItems;
        return $this;
    }

    /**
     * Human-readable text describing the package.
     *
     * @param string $itemDescription
     * @return $this
     */
    public function setItemDescription($itemDescription)
    {
        $this->values['ItemDescription'] = $itemDescription;
        return $this;
    }

    /**
     * Human-readable text describing the contents of the package to be used for clearance purposes.
     *
     * @param string $itemDescriptionForClearance
     * @return $this
     */
    public function setItemDescriptionForClearance($itemDescriptionForClearance)
    {
        $this->values['ItemDescriptionForClearance'] = $itemDescriptionForClearance;
        return $this;
    }

    /**
     * Set CustomerReferences
     *
     * @param CustomerReference[] $customerReferences
     * @return $this
     */
    public function setCustomerReferences(array $customerReferences)
    {
        $this->values['CustomerReferences'] = $customerReferences;
        return $this;
    }

    /**
     * Set SpecialServicesRequested
     *
     * @param PackageSpecialServicesRequested $specialServicesRequested
     * @return $this
     */
    public function setSpecialServicesRequested(PackageSpecialServicesRequested $specialServicesRequested)
    {
        $this->values['SpecialServicesRequested'] = $specialServicesRequested;
        return $this;
    }

    /**
     * Set SpecialHandlingDetail
     *
     * @param PackageSpecialHandlingDetail $specialHandlingDetail
     * @return $this
     */
    public function setSpecialHandlingDetail(PackageSpecialHandlingDetail $specialHandlingDetail)
    {
        $this->values['SpecialHandlingDetail'] = $specialHandlingDetail;
        return $this;
    }

    /**
     * Details the contents of the package.
     *
     * @param ContentRecord[] $contentRecords
     * @return $this
     */
    public function setContentRecords(array $contentRecords)
    {
        $this->values['ContentRecords'] = $contentRecords;
        return $this;
    }

    /**
     * Set Commodities
     *
     * @param Commodity[] $commodities
     * @return $this
     */
    public function setCommodities(array $commodities)
    {
        $this->values['Commodities'] = $commodities;
        return $this;
    }

    /**
     * Set ConveyanceDetail
     *
     * @param ShipperConveyanceDetail $conveyanceDetail
     * @return $this
     */
    public function setConveyanceDetail(ShipperConveyanceDetail $conveyanceDetail)
    {
        $this->values['ConveyanceDetail'] = $conveyanceDetail;
        return $this;
    }
}
