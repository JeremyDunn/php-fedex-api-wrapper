<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SearchLocationsReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property \FedEx\LocationsService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property int $TotalResultsAvailable
 * @property int $ResultsReturned
 * @property Address $FormattedAddress
 * @property AddressToLocationRelationshipDetail[] $AddressToLocationRelationships

 */
class SearchLocationsReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SearchLocationsReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\LocationsService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return $this
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->values['HighestSeverity'] = $highestSeverity;
        return $this;
    }

    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return $this
     */
    public function setNotifications(array $notifications)
    {
        $this->values['Notifications'] = $notifications;
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
     * Specifies total number of location results that are available.
     *
     * @param int $totalResultsAvailable
     * @return $this
     */
    public function setTotalResultsAvailable($totalResultsAvailable)
    {
        $this->values['TotalResultsAvailable'] = $totalResultsAvailable;
        return $this;
    }

    /**
     * Specifies the number of location results returned in this reply.
     *
     * @param int $resultsReturned
     * @return $this
     */
    public function setResultsReturned($resultsReturned)
    {
        $this->values['ResultsReturned'] = $resultsReturned;
        return $this;
    }

    /**
     * Specifies the address formatted to have correct postal code per USPS standards.
     *
     * @param Address $formattedAddress
     * @return $this
     */
    public function setFormattedAddress(Address $formattedAddress)
    {
        $this->values['FormattedAddress'] = $formattedAddress;
        return $this;
    }

    /**
     * The details about the relationship between the address requested and the locations returned.
     *
     * @param AddressToLocationRelationshipDetail[] $addressToLocationRelationships
     * @return $this
     */
    public function setAddressToLocationRelationships(array $addressToLocationRelationships)
    {
        $this->values['AddressToLocationRelationships'] = $addressToLocationRelationships;
        return $this;
    }
}
