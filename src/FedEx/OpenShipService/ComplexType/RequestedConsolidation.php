<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RequestedConsolidation
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\ConsolidationType|string $ConsolidationType
 * @property string $ShipDate
 * @property TrackingId[] $TrackingIds
 * @property string $Description
 * @property Party $Shipper
 * @property ContactAndAddress $Origin
 * @property Party $SoldTo
 * @property string $BookingNumber
 * @property ConsolidationDataSource[] $ConsolidationDataSources
 * @property ConsolidationSpecialServicesRequested $SpecialServicesRequested
 * @property CustomerReference[] $CustomerReferences
 * @property LabelSpecification $LabelSpecification
 * @property InternationalDistributionDetail $InternationalDistributionDetail
 * @property ConsolidationTransborderDistributionDetail $TransborderDistributionDetail
 * @property RequestedDistributionLocation[] $DistributionLocations
 * @property CustomsClearanceDetail $CustomsClearanceDetail
 * @property Payment $ShippingChargesPayment
 * @property ConsolidationDocumentSpecification $ConsolidationDocumentSpecification
 * @property \FedEx\OpenShipService\SimpleType\RequestedShippingDocumentType|string[] $CrnShippingDocumentTypes

 */
class RequestedConsolidation extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RequestedConsolidation';

    /**
     * Set ConsolidationType
     *
     * @param \FedEx\OpenShipService\SimpleType\ConsolidationType|string $consolidationType
     * @return $this
     */
    public function setConsolidationType($consolidationType)
    {
        $this->values['ConsolidationType'] = $consolidationType;
        return $this;
    }

    /**
     * Date for the (intended) actual movement of the consolidation.
     *
     * @param string $shipDate
     * @return $this
     */
    public function setShipDate($shipDate)
    {
        $this->values['ShipDate'] = $shipDate;
        return $this;
    }

    /**
     * Master Air Way Bill tracking ID
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
     * Specifies a human readable description of the consolidation that is provided by the client, in order to easily identify the consolidation.
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Set Shipper
     *
     * @param Party $shipper
     * @return $this
     */
    public function setShipper(Party $shipper)
    {
        $this->values['Shipper'] = $shipper;
        return $this;
    }

    /**
     * Physical starting address for the shipment, if different from shipper's address.
     *
     * @param ContactAndAddress $origin
     * @return $this
     */
    public function setOrigin(ContactAndAddress $origin)
    {
        $this->values['Origin'] = $origin;
        return $this;
    }

    /**
     * Indicates the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser, rather than the recipient, determines when certain customs regulations apply.
     *
     * @param Party $soldTo
     * @return $this
     */
    public function setSoldTo(Party $soldTo)
    {
        $this->values['SoldTo'] = $soldTo;
        return $this;
    }

    /**
     * Set BookingNumber
     *
     * @param string $bookingNumber
     * @return $this
     */
    public function setBookingNumber($bookingNumber)
    {
        $this->values['BookingNumber'] = $bookingNumber;
        return $this;
    }

    /**
     * Specifies how selected values in the consolidation are to be determined.
     *
     * @param ConsolidationDataSource[] $consolidationDataSources
     * @return $this
     */
    public function setConsolidationDataSources(array $consolidationDataSources)
    {
        $this->values['ConsolidationDataSources'] = $consolidationDataSources;
        return $this;
    }

    /**
     * Set SpecialServicesRequested
     *
     * @param ConsolidationSpecialServicesRequested $specialServicesRequested
     * @return $this
     */
    public function setSpecialServicesRequested(ConsolidationSpecialServicesRequested $specialServicesRequested)
    {
        $this->values['SpecialServicesRequested'] = $specialServicesRequested;
        return $this;
    }

    /**
     * References applying to the entire consolidation.
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
     * Set LabelSpecification
     *
     * @param LabelSpecification $labelSpecification
     * @return $this
     */
    public function setLabelSpecification(LabelSpecification $labelSpecification)
    {
        $this->values['LabelSpecification'] = $labelSpecification;
        return $this;
    }

    /**
     * Set InternationalDistributionDetail
     *
     * @param InternationalDistributionDetail $internationalDistributionDetail
     * @return $this
     */
    public function setInternationalDistributionDetail(InternationalDistributionDetail $internationalDistributionDetail)
    {
        $this->values['InternationalDistributionDetail'] = $internationalDistributionDetail;
        return $this;
    }

    /**
     * Specifies the transborder data when the consolidation type is transborder distribution.
     *
     * @param ConsolidationTransborderDistributionDetail $transborderDistributionDetail
     * @return $this
     */
    public function setTransborderDistributionDetail(ConsolidationTransborderDistributionDetail $transborderDistributionDetail)
    {
        $this->values['TransborderDistributionDetail'] = $transborderDistributionDetail;
        return $this;
    }

    /**
     * Specifies the type and location id for the distribution location to be used to process the consolidation.
     *
     * @param RequestedDistributionLocation[] $distributionLocations
     * @return $this
     */
    public function setDistributionLocations(array $distributionLocations)
    {
        $this->values['DistributionLocations'] = $distributionLocations;
        return $this;
    }

    /**
     * Customs clearance data, used for both international and intra-country shipping.
     *
     * @param CustomsClearanceDetail $customsClearanceDetail
     * @return $this
     */
    public function setCustomsClearanceDetail(CustomsClearanceDetail $customsClearanceDetail)
    {
        $this->values['CustomsClearanceDetail'] = $customsClearanceDetail;
        return $this;
    }

    /**
     * Set ShippingChargesPayment
     *
     * @param Payment $shippingChargesPayment
     * @return $this
     */
    public function setShippingChargesPayment(Payment $shippingChargesPayment)
    {
        $this->values['ShippingChargesPayment'] = $shippingChargesPayment;
        return $this;
    }

    /**
     * Provides requirements for production of all documents for this consolidation.
     *
     * @param ConsolidationDocumentSpecification $consolidationDocumentSpecification
     * @return $this
     */
    public function setConsolidationDocumentSpecification(ConsolidationDocumentSpecification $consolidationDocumentSpecification)
    {
        $this->values['ConsolidationDocumentSpecification'] = $consolidationDocumentSpecification;
        return $this;
    }

    /**
     * If specifies, identifies the documents that are required to be generated for every CRN in the consolidation.
     *
     * @param \FedEx\OpenShipService\SimpleType\RequestedShippingDocumentType[]|string[] $crnShippingDocumentTypes
     * @return $this
     */
    public function setCrnShippingDocumentTypes(array $crnShippingDocumentTypes)
    {
        $this->values['CrnShippingDocumentTypes'] = $crnShippingDocumentTypes;
        return $this;
    }
}
