<?php
namespace Sga\OrderChangeStatus\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Sga\OrderChangeStatus\Api\Data\LogInterface as ModelInterface;
use Sga\OrderChangeStatus\Model\ResourceModel\Log as ResourceModel;

class Log extends AbstractModel implements IdentityInterface, ModelInterface
{
    const CACHE_TAG = 'orderchangestatus_log';

    protected $_eventPrefix = 'orderchangestatus_log';

    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getLogId()
    {
        return $this->getData(self::LOG_ID);
    }

    public function setLogId($id)
    {
        return $this->setData(self::LOG_ID, $id);
    }

    public function getOrderId()
    {
        return $this->getData(self::ORDER_ID);
    }

    public function setOrderId($value)
    {
        return $this->setData(self::ORDER_ID, $value);
    }

    public function getOldState()
    {
        return $this->getData(self::OLD_STATE);
    }

    public function setOldState($value)
    {
        return $this->setData(self::OLD_STATE, $value);
    }

    public function getNewState()
    {
        return $this->getData(self::NEW_STATE);
    }

    public function setNewState($value)
    {
        return $this->setData(self::NEW_STATE, $value);
    }

    public function getOldStatus()
    {
        return $this->getData(self::OLD_STATUS);
    }

    public function setOldStatus($value)
    {
        return $this->setData(self::OLD_STATUS, $value);
    }

    public function getNewStatus()
    {
        return $this->getData(self::NEW_STATUS);
    }

    public function setNewStatus($value)
    {
        return $this->setData(self::NEW_STATUS, $value);
    }

    public function getUser()
    {
        return $this->getData(self::USER);
    }

    public function setUser($value)
    {
        return $this->setData(self::USER, $value);
    }

    public function getStackTrace()
    {
        return $this->getData(self::STACK_TRACE);
    }

    public function setStackTrace($value)
    {
        return $this->setData(self::STACK_TRACE, $value);
    }

    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt($value)
    {
        return $this->setData(self::CREATED_AT, $value);
    }
}
