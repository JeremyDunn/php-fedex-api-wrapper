<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EMailLabelDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $Message
 * @property EMailRecipient[] $Recipients

 */
class EMailLabelDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EMailLabelDetail';

    /**
     * Content of the email message.
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->values['Message'] = $message;
        return $this;
    }

    /**
     * Set Recipients
     *
     * @param EMailRecipient[] $recipients
     * @return $this
     */
    public function setRecipients(array $recipients)
    {
        $this->values['Recipients'] = $recipients;
        return $this;
    }
}
