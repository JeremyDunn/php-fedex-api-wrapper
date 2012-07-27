<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The type and value of the package identifier that is to be used to retrieve the tracking information for a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackPackageIdentifier
    extends AbstractComplexType
{
    protected $_name = 'TrackPackageIdentifier';

    /**
     * The value to be used to retrieve tracking information for a package.
     *
     * @param string $Value
     * return TrackPackageIdentifier
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * The type of the Value to be used to retrieve tracking information for a package (e.g. SHIPPER_REFERENCE, PURCHASE_ORDER, TRACKING_NUMBER_OR_DOORTAG, etc..) .
     *
     * @param TrackIdentifierType $Type
     * return TrackPackageIdentifier
     */
    public function setType(\FedEx\TrackService\SimpleType\TrackIdentifierType $type)
    {
        $this->Type = $type;
        return $this;
    }
    

    
}