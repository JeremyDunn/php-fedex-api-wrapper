<?php
namespace FedEx\ShipService\ComplexType;

/**
 * ?
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class AstraLabelElement
    extends AbstractComplexType
{
    protected $_name = 'AstraLabelElement';

    /**
     * Position of Astra element
     *
     * @param int $Number
     * return AstraLabelElement
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * Content corresponding to the Astra Element
     *
     * @param string $Content
     * return AstraLabelElement
     */
    public function setContent($content)
    {
        $this->Content = $content;
        return $this;
    }
    

    
}