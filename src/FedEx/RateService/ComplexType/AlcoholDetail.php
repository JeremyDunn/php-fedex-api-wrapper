<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies details for a package containing alcohol
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class AlcoholDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AlcoholDetail';

    /**
     * The license type that the recipient of the alcohol package.
     *
     * @param \FedEx\RateService\SimpleType\AlcoholRecipientType|string $recipientType
     * @return AlcoholDetail
     */
    public function setRecipientType($recipientType)
    {
        $this->RecipientType = $recipientType;
        return $this;
    }
    
    /**
     * Returns The license type that the recipient of the alcohol package.
     *
     * @return \FedEx\RateService\SimpleType\AlcoholRecipientType|string
     */
    public function getRecipientType()
    {
        return $this->RecipientType;
    }
    

    
}