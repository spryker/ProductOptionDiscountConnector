<?php
/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Zed\ProductOptionDiscountConnector\Communication\Plugin\OrderAmountAggregator;

use Generated\Shared\Transfer\OrderTransfer;
use Spryker\Zed\Discount\Communication\Plugin\AbstractDiscountPlugin;
use Spryker\Zed\Sales\Dependency\Plugin\OrderTotalsAggregatePluginInterface;
use Spryker\Zed\ProductOptionDiscountConnector\Business\ProductOptionDiscountConnectorFacade;

/**
 * @method ProductOptionDiscountConnectorFacade getFacade()
 */
class DiscountTotalAmountWithProductOptionsAggregatorPlugin extends AbstractDiscountPlugin implements OrderTotalsAggregatePluginInterface
{

    /**
     * @param OrderTransfer $orderTransfer
     *
     * @return void
     */
    public function aggregate(OrderTransfer $orderTransfer)
    {
        $this->getFacade()->aggregateOrderTotalDiscountAmount($orderTransfer);
    }
}
