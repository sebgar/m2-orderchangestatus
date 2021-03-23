<?php
namespace Sga\OrderChangeStatus\Model\ResourceModel\Log;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Sga\OrderChangeStatus\Model\Log as Model;
use Sga\OrderChangeStatus\Model\ResourceModel\Log as ResourceModel;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'log_id';

    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
