<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Message
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $Code
 * @property string $Text
 * @property string $LocalizedText
 * @property MessageParameter[] $Parameters

 */
class Message extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Message';

    /**
     * Set Code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['Code'] = $code;
        return $this;
    }

    /**
     * Set Text
     *
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->values['Text'] = $text;
        return $this;
    }

    /**
     * Set LocalizedText
     *
     * @param string $localizedText
     * @return $this
     */
    public function setLocalizedText($localizedText)
    {
        $this->values['LocalizedText'] = $localizedText;
        return $this;
    }

    /**
     * Set Parameters
     *
     * @param MessageParameter[] $parameters
     * @return $this
     */
    public function setParameters(array $parameters)
    {
        $this->values['Parameters'] = $parameters;
        return $this;
    }
}
