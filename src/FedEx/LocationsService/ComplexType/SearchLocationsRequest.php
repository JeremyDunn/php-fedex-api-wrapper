<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SearchLocationsRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $EffectiveDate
 * @property \FedEx\LocationsService\SimpleType\LocationsSearchCriteriaType|string $LocationsSearchCriterion
 * @property string $ShipperAccountNumber
 * @property UniqueTrackingNumber $UniqueTrackingNumber
 * @property Address $Address
 * @property string $PhoneNumber
 * @property string $GeographicCoordinates
 * @property \FedEx\LocationsService\SimpleType\MultipleMatchesActionType|string $MultipleMatchesAction
 * @property LocationSortDetail $SortDetail
 * @property SearchLocationConstraints $Constraints

 */
class SearchLocationsRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SearchLocationsRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return $this
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->values['WebAuthenticationDetail'] = $webAuthenticationDetail;
        return $this;
    }

    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return $this
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->values['ClientDetail'] = $clientDetail;
        return $this;
    }

    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return $this
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->values['TransactionDetail'] = $transactionDetail;
        return $this;
    }

    /**
     * Set Version
     *
     * @param VersionId $version
     * @return $this
     */
    public function setVersion(VersionId $version)
    {
        $this->values['Version'] = $version;
        return $this;
    }

    /**
     * Set EffectiveDate
     *
     * @param string $effectiveDate
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->values['EffectiveDate'] = $effectiveDate;
        return $this;
    }

    /**
     * Specifies the criterion that may be used to search for FedEx locations.
     *
     * @param \FedEx\LocationsService\SimpleType\LocationsSearchCriteriaType|string $locationsSearchCriterion
     * @return $this
     */
    public function setLocationsSearchCriterion($locationsSearchCriterion)
    {
        $this->values['LocationsSearchCriterion'] = $locationsSearchCriterion;
        return $this;
    }

    /**
     * The account number of the shipper. This is the account number for which restrictions and privileges will be applied.
     *
     * @param string $shipperAccountNumber
     * @return $this
     */
    public function setShipperAccountNumber($shipperAccountNumber)
    {
        $this->values['ShipperAccountNumber'] = $shipperAccountNumber;
        return $this;
    }

    /**
     * Tracking number to be used when searching for locations. This tracking number, along with other location search constraints, help to narrow the search for locations.
     *
     * @param UniqueTrackingNumber $uniqueTrackingNumber
     * @return $this
     */
    public function setUniqueTrackingNumber(UniqueTrackingNumber $uniqueTrackingNumber)
    {
        $this->values['UniqueTrackingNumber'] = $uniqueTrackingNumber;
        return $this;
    }

    /**
     * Set Address
     *
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->values['Address'] = $address;
        return $this;
    }

    /**
     * Set PhoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->values['PhoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Set GeographicCoordinates
     *
     * @param string $geographicCoordinates
     * @return $this
     */
    public function setGeographicCoordinates($geographicCoordinates)
    {
        $this->values['GeographicCoordinates'] = $geographicCoordinates;
        return $this;
    }

    /**
     * Specifies the criterion to be used to return location results when there are mutiple matches.
     *
     * @param \FedEx\LocationsService\SimpleType\MultipleMatchesActionType|string $multipleMatchesAction
     * @return $this
     */
    public function setMultipleMatchesAction($multipleMatchesAction)
    {
        $this->values['MultipleMatchesAction'] = $multipleMatchesAction;
        return $this;
    }

    /**
     * Specifies the details on how the location search results be sorted in the reply.
     *
     * @param LocationSortDetail $sortDetail
     * @return $this
     */
    public function setSortDetail(LocationSortDetail $sortDetail)
    {
        $this->values['SortDetail'] = $sortDetail;
        return $this;
    }

    /**
     * Contraints to be applied to location attributes.
     *
     * @param SearchLocationConstraints $constraints
     * @return $this
     */
    public function setConstraints(SearchLocationConstraints $constraints)
    {
        $this->values['Constraints'] = $constraints;
        return $this;
    }
}
