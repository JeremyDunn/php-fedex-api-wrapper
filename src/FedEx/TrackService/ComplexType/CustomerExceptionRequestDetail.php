<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomerExceptionRequestDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $Id
 * @property string $StatusCode
 * @property string $StatusDescription
 * @property string $CreateTime

 */
class CustomerExceptionRequestDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomerExceptionRequestDetail';

    /**
     * Unique identifier for the customer exception request.
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Set StatusCode
     *
     * @param string $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->values['StatusCode'] = $statusCode;
        return $this;
    }

    /**
     * Set StatusDescription
     *
     * @param string $statusDescription
     * @return $this
     */
    public function setStatusDescription($statusDescription)
    {
        $this->values['StatusDescription'] = $statusDescription;
        return $this;
    }

    /**
     * Set CreateTime
     *
     * @param string $createTime
     * @return $this
     */
    public function setCreateTime($createTime)
    {
        $this->values['CreateTime'] = $createTime;
        return $this;
    }
}
