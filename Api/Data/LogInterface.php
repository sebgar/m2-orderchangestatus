<?php
namespace Sga\OrderChangeStatus\Api\Data;

interface LogInterface
{
    const LOG_ID = 'log_id';
    const ORDER_ID = 'order_id';
    const OLD_STATE = 'old_state';
    const NEW_STATE = 'new_state';
    const OLD_STATUS = 'old_status';
    const NEW_STATUS = 'new_status';
    const USER = 'user';
    const STACK_TRACE = 'stack_trace';
    const CREATED_AT = 'created_at';

    /**
     * Get log id
     *
     * @return int|null
     */
    public function getLogId();

    /**
     * Set log id
     *
     * @param int $id
     * @return LogInterface
     */
    public function setLogId($id);
    
    /**
     * Get order_id
     *
     * @return int|null
     */
    public function getOrderId();

    /**
     * Set order_id
     *
     * @param int $value
     * @return LogInterface
     */
    public function setOrderId($value);
    
    /**
     * Get old_state
     *
     * @return string|null
     */
    public function getOldState();

    /**
     * Set old_state
     *
     * @param string $value
     * @return LogInterface
     */
    public function setOldState($value);
    
    /**
     * Get new_state
     *
     * @return string|null
     */
    public function getNewState();

    /**
     * Set new_state
     *
     * @param string $value
     * @return LogInterface
     */
    public function setNewState($value);
    
    /**
     * Get old_status
     *
     * @return string|null
     */
    public function getOldStatus();

    /**
     * Set old_status
     *
     * @param string $value
     * @return LogInterface
     */
    public function setOldStatus($value);
    
    /**
     * Get new_status
     *
     * @return string|null
     */
    public function getNewStatus();

    /**
     * Set new_status
     *
     * @param string $value
     * @return LogInterface
     */
    public function setNewStatus($value);
    
    /**
     * Get user
     *
     * @return string|null
     */
    public function getUser();

    /**
     * Set user
     *
     * @param string $value
     * @return LogInterface
     */
    public function setUser($value);
    
    /**
     * Get stack_trace
     *
     * @return string|null
     */
    public function getStackTrace();

    /**
     * Set stack_trace
     *
     * @param string $value
     * @return LogInterface
     */
    public function setStackTrace($value);
    
    /**
     * Get created_at
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     *
     * @param string $value
     * @return LogInterface
     */
    public function setCreatedAt($value);
    
}