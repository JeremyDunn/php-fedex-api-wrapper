<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Currently not supported.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class PriorityAlertDetail
    extends AbstractComplexType
{
    protected $_name = 'PriorityAlertDetail';

    /**
     * 
     *
     * @param array[string] $Content
     * return PriorityAlertDetail
     */
    public function setContent(array $content)
    {
        $this->Content = $content;
        return $this;
    }
    

    
}