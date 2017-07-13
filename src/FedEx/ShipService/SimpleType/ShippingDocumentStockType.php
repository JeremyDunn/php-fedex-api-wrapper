<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the type of paper (stock) on which a document will be printed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentStockType extends AbstractSimpleType
{
    const _OP_900_LG_B = 'OP_900_LG_B';
    const _OP_900_LL_B = 'OP_900_LL_B';
    const _OP_950 = 'OP_950';
    const _PAPER_4X6 = 'PAPER_4X6';
    const _PAPER_4_PER_PAGE_PORTRAIT = 'PAPER_4_PER_PAGE_PORTRAIT';
    const _PAPER_LETTER = 'PAPER_LETTER';
    const _STOCK_4X6 = 'STOCK_4X6';
    const _STOCK_4X6POINT75_LEADING_DOC_TAB = 'STOCK_4X6.75_LEADING_DOC_TAB';
    const _STOCK_4X6POINT75_TRAILING_DOC_TAB = 'STOCK_4X6.75_TRAILING_DOC_TAB';
    const _STOCK_4X8 = 'STOCK_4X8';
    const _STOCK_4X9_LEADING_DOC_TAB = 'STOCK_4X9_LEADING_DOC_TAB';
    const _STOCK_4X9_TRAILING_DOC_TAB = 'STOCK_4X9_TRAILING_DOC_TAB';
}
