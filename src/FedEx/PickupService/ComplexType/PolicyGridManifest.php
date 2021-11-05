<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PolicyGridManifest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $GridId
 * @property string[] $Contents

 */
class PolicyGridManifest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PolicyGridManifest';

    /**
     * Set GridId
     *
     * @param string $gridId
     * @return $this
     */
    public function setGridId($gridId)
    {
        $this->values['GridId'] = $gridId;
        return $this;
    }

    /**
     * Set Contents
     *
     * @param string $contents
     * @return $this
     */
    public function setContents($contents)
    {
        $this->values['Contents'] = $contents;
        return $this;
    }
}
