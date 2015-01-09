<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies that name, title and place of the signatory responsible for the dangerous goods shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DangerousGoodsSignatory
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DangerousGoodsSignatory';

    /**
     * Set ContactName
     *
     * @param string $contactName
     * @return DangerousGoodsSignatory
     */
    public function setContactName($contactName)
    {
        $this->ContactName = $contactName;
        return $this;
    }
    
    /**
     * Returns Set ContactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->ContactName;
    }
    
    /**
     * Set Title
     *
     * @param string $title
     * @return DangerousGoodsSignatory
     */
    public function setTitle($title)
    {
        $this->Title = $title;
        return $this;
    }
    
    /**
     * Returns Set Title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }
    
    /**
     * Indicates the place where the form is signed.
     *
     * @param string $place
     * @return DangerousGoodsSignatory
     */
    public function setPlace($place)
    {
        $this->Place = $place;
        return $this;
    }
    
    /**
     * Returns Indicates the place where the form is signed.
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->Place;
    }
    

    
}