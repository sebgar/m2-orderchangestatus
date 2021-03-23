<?php
namespace Sga\OrderChangeStatus\Plugin;

use Magento\Sales\Model\Order as Subject;
use Magento\Framework\App\State as AppState;
use Sga\OrderChangeStatus\Model\LogFactory;

class Order
{
    protected $_appState;
    protected $_logFactory;

    public function __construct(
        AppState $appState,
        LogFactory $logFactory
    ){
        $this->_appState = $appState;
        $this->_logFactory = $logFactory;
    }

    public function afterSetStatus(
        Subject $subject,
        $result,
        $status
    ) {
        $oldState = $subject->getOrigData('state');
        $oldStatus = $subject->getOrigData('status');
        $newState = $subject->getData('state');
        $newStatus = $subject->getData('status');

        $this->_logChangeStateStatus($subject, $oldState, $oldStatus, $newState, $newStatus);

        return $result;
    }

    protected function _logChangeStateStatus(Subject $order, $oldState, $oldStatus, $newState, $newStatus)
    {
        if ((int)$order->getId() === 0) {
            return;
        }
        if ((string)$newState === (string)$oldState && (string)$newStatus === (string)$oldStatus) {
            return;
        }

        $username = '-unknown-';
        if ($this->_appState->getAreaCode() === 'adminhtml') {
            //$username = Mage::getSingleton('admin/session')->getUser()->getUsername().' ('.Mage::getSingleton('admin/session')->getUser()->getId().')';
        }

        try {
            throw new \Exception('here');
        } catch (\Exception $e) {
            $stackTrace = $e->getTraceAsString();
        }

        try {
            $log = $this->_logFactory->create();
            $log->setOrderId($order->getId());
            $log->setUser($username);
            $log->setOldState($oldState);
            $log->setNewState($newState);
            $log->setOldStatus($oldStatus);
            $log->setNewStatus($newStatus);
            $log->setStackTrace($stackTrace);
            $log->save();
        } catch (\Exception $e) {
        }
    }
}
