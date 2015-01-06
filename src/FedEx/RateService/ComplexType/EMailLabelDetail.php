<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EMailLabelDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class EMailLabelDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EMailLabelDetail';

    /**
     * Content of the email message.
     *
     * @param string $message
     * @return EMailLabelDetail
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * Returns Content of the email message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }
    
    /**
     * Set Recipients
     *
     * @param EMailRecipient[] $recipients
     * @return EMailLabelDetail
     */
    public function setRecipients(array $recipients)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    
    /**
     * Returns Set Recipients
     *
     * @return EMailRecipient[]
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    

    
}