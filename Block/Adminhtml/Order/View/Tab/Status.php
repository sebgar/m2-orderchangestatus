<?php
namespace Sga\OrderChangeStatus\Block\Adminhtml\Order\View\Tab;

use Magento\Shipping\Helper\Data as ShippingHelper;
use Magento\Tax\Helper\Data as TaxHelper;
use Sga\OrderChangeStatus\Model\ResourceModel\Log\Collection as LogCollection;

class Status extends \Magento\Sales\Block\Adminhtml\Order\AbstractOrder implements
    \Magento\Backend\Block\Widget\Tab\TabInterface
{
    protected $_logCollection;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Sales\Helper\Admin $adminHelper,
        LogCollection $logCollection,
        array $data = [],
        ?ShippingHelper $shippingHelper = null,
        ?TaxHelper $taxHelper = null
    ){
        $this->_logCollection = $logCollection;

        parent::__construct($context, $registry, $adminHelper, $data, $shippingHelper, $taxHelper);
    }

    public function getLogs()
    {
        $list = [];

        $order = $this->getOrder();
        if ((int)$order->getId() > 0) {
            $list = $this->_logCollection->addFieldToFilter('order_id', $order->getId())->getItems();
        }

        return $list;
    }

    public function getTabLabel()
    {
        return __('Status Change');
    }

    /**
     * {@inheritdoc}
     */
    public function getTabTitle()
    {
        return __('Status Change');
    }

    /**
     * {@inheritdoc}
     */
    public function canShowTab()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isHidden()
    {
        return false;
    }
}
