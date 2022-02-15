<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RegulatoryWaiver
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $Id
 * @property string $Description
 * @property Message[] $Advisories

 */
class RegulatoryWaiver extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RegulatoryWaiver';

    /**
     * FOR FEDEX INTERNAL USE ONLY: The id of the waiver.
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: The description of the waiver.
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
     * Set Advisories
     *
     * @param Message[] $advisories
     * @return $this
     */
    public function setAdvisories(array $advisories)
    {
        $this->values['Advisories'] = $advisories;
        return $this;
    }
}
