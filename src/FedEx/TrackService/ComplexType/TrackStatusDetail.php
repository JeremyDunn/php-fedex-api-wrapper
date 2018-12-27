<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about the status of the track information for the shipments being tracked.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $CreationTime
 * @property string $Code
 * @property string $Description
 * @property Address $Location
 * @property TrackStatusAncillaryDetail[] $AncillaryDetails

 */
class TrackStatusDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackStatusDetail';

    /**
     * Set CreationTime
     *
     * @param string $creationTime
     * @return $this
     */
    public function setCreationTime($creationTime)
    {
        $this->values['CreationTime'] = $creationTime;
        return $this;
    }

    /**
     * Set Code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['Code'] = $code;
        return $this;
    }

    /**
     * Set Description
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
     * Set Location
     *
     * @param Address $location
     * @return $this
     */
    public function setLocation(Address $location)
    {
        $this->values['Location'] = $location;
        return $this;
    }

    /**
     * Set AncillaryDetails
     *
     * @param TrackStatusAncillaryDetail[] $ancillaryDetails
     * @return $this
     */
    public function setAncillaryDetails(array $ancillaryDetails)
    {
        $this->values['AncillaryDetails'] = $ancillaryDetails;
        return $this;
    }
}
