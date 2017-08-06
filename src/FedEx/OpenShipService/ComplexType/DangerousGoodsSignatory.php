<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies that name, title and place of the signatory responsible for the dangerous goods shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $ContactName
 * @property string $Title
 * @property string $Place

 */
class DangerousGoodsSignatory extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DangerousGoodsSignatory';

    /**
     * Set ContactName
     *
     * @param string $contactName
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->values['ContactName'] = $contactName;
        return $this;
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->values['Title'] = $title;
        return $this;
    }

    /**
     * Indicates the place where the form is signed.
     *
     * @param string $place
     * @return $this
     */
    public function setPlace($place)
    {
        $this->values['Place'] = $place;
        return $this;
    }
}
