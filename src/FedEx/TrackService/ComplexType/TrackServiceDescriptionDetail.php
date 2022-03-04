<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackServiceDescriptionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $Type
 * @property string $Description
 * @property string $ShortDescription

 */
class TrackServiceDescriptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackServiceDescriptionDetail';

    /**
     * This field contains the service type values, like PRIORITY_OVERNIGHT and FEDEX_GROUND.
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
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
     * Specifies a shorter description for the service that is calculated per the service code.
     *
     * @param string $shortDescription
     * @return $this
     */
    public function setShortDescription($shortDescription)
    {
        $this->values['ShortDescription'] = $shortDescription;
        return $this;
    }
}
