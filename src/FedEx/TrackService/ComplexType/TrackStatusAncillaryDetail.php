<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackStatusAncillaryDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $Reason
 * @property string $ReasonDescription
 * @property string $Action
 * @property string $ActionDescription

 */
class TrackStatusAncillaryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackStatusAncillaryDetail';

    /**
     * Set Reason
     *
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->values['Reason'] = $reason;
        return $this;
    }

    /**
     * Set ReasonDescription
     *
     * @param string $reasonDescription
     * @return $this
     */
    public function setReasonDescription($reasonDescription)
    {
        $this->values['ReasonDescription'] = $reasonDescription;
        return $this;
    }

    /**
     * Set Action
     *
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->values['Action'] = $action;
        return $this;
    }

    /**
     * Set ActionDescription
     *
     * @param string $actionDescription
     * @return $this
     */
    public function setActionDescription($actionDescription)
    {
        $this->values['ActionDescription'] = $actionDescription;
        return $this;
    }
}
