<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PagingDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $PagingToken
 * @property int $NumberOfResultsPerPage

 */
class PagingDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PagingDetail';

    /**
     * When the MoreData field = true in a TrackReply the PagingToken must be sent in the subsequent TrackRequest to retrieve the next page of data.
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
     * Specifies the number of results to display per page when the there is more than one page in the subsequent TrackReply.
     *
     * @param int $numberOfResultsPerPage
     * @return $this
     */
    public function setNumberOfResultsPerPage($numberOfResultsPerPage)
    {
        $this->values['NumberOfResultsPerPage'] = $numberOfResultsPerPage;
        return $this;
    }
}
