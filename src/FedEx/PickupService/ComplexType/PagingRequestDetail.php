<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details needed organise results using paging mechanism.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $Id
 * @property string $PagingToken
 * @property int $MaximumResultsPerPage

 */
class PagingRequestDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PagingRequestDetail';

    /**
     * An identifier for the set of data that supports paging.
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
     * When the MoreDataAvailable field is true in the results reply the PagingToken must be sent in the subsequent request to retrieve the next page of data.
     *
     * @param string $pagingToken
     * @return $this
     */
    public function setPagingToken($pagingToken)
    {
        $this->values['PagingToken'] = $pagingToken;
        return $this;
    }

    /**
     * Maximum number of results to be included per page.
     *
     * @param int $maximumResultsPerPage
     * @return $this
     */
    public function setMaximumResultsPerPage($maximumResultsPerPage)
    {
        $this->values['MaximumResultsPerPage'] = $maximumResultsPerPage;
        return $this;
    }
}
