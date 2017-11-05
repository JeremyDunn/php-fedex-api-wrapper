<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackReturnDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\TrackReturnMovementStatusType|string $MovementStatus
 * @property \FedEx\TrackService\SimpleType\TrackReturnLabelType|string $LabelType
 * @property string $Description
 * @property string $AuthorizationName

 */
class TrackReturnDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackReturnDetail';

    /**
     * Set MovementStatus
     *
     * @param \FedEx\TrackService\SimpleType\TrackReturnMovementStatusType|string $movementStatus
     * @return $this
     */
    public function setMovementStatus($movementStatus)
    {
        $this->values['MovementStatus'] = $movementStatus;
        return $this;
    }

    /**
     * Set LabelType
     *
     * @param \FedEx\TrackService\SimpleType\TrackReturnLabelType|string $labelType
     * @return $this
     */
    public function setLabelType($labelType)
    {
        $this->values['LabelType'] = $labelType;
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
     * Set AuthorizationName
     *
     * @param string $authorizationName
     * @return $this
     */
    public function setAuthorizationName($authorizationName)
    {
        $this->values['AuthorizationName'] = $authorizationName;
        return $this;
    }
}
