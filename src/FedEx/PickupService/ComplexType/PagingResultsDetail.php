<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies details when results are organised using paging mechanism.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $Id
 * @property boolean $MoreDataAvailable
 * @property string $PagingToken
 * @property int $TotalResultsAvailable

 */
class PagingResultsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PagingResultsDetail';

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
     * True if additional results remain to be retrieved.
     *
     * @param boolean $moreDataAvailable
     * @return $this
     */
    public function setMoreDataAvailable($moreDataAvailable)
    {
        $this->values['MoreDataAvailable'] = $moreDataAvailable;
        return $this;
    }

    /**
     * Value that must be passed in a subsequent request to retrieve the next set of results (when MoreDataAvailable = true)
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
     * Total number of results available.
     *
     * @param int $totalResultsAvailable
     * @return $this
     */
    public function setTotalResultsAvailable($totalResultsAvailable)
    {
        $this->values['TotalResultsAvailable'] = $totalResultsAvailable;
        return $this;
    }
}
