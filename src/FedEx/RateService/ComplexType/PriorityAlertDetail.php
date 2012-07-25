<?php
namespace FedEx\RateService\ComplexType;

/**
 * Currently not supported.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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