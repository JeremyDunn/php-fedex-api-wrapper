<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Time Range specified in local time.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $Begins
 * @property string $Ends

 */
class LocalTimeRange extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LocalTimeRange';

    /**
     * Set Begins
     *
     * @param string $begins
     * @return $this
     */
    public function setBegins($begins)
    {
        $this->values['Begins'] = $begins;
        return $this;
    }

    /**
     * Set Ends
     *
     * @param string $ends
     * @return $this
     */
    public function setEnds($ends)
    {
        $this->values['Ends'] = $ends;
        return $this;
    }
}
