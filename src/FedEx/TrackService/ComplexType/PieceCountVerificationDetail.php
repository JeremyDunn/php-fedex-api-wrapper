<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PieceCountVerificationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\PieceCountLocationType|string $CountLocationType
 * @property int $Count
 * @property string $Description

 */
class PieceCountVerificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PieceCountVerificationDetail';

    /**
     * Set CountLocationType
     *
     * @param \FedEx\TrackService\SimpleType\PieceCountLocationType|string $countLocationType
     * @return $this
     */
    public function setCountLocationType($countLocationType)
    {
        $this->values['CountLocationType'] = $countLocationType;
        return $this;
    }

    /**
     * Set Count
     *
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->values['Count'] = $count;
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
}
