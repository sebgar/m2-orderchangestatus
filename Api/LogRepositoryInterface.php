<?php
namespace Sga\OrderChangeStatus\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Sga\OrderChangeStatus\Api\Data\LogInterface as ModelInterface;

interface LogRepositoryInterface
{
    public function save(ModelInterface $model);

    public function getById($id);

    public function getList(SearchCriteriaInterface $searchCriteria);

    public function delete(ModelInterface $model);

    public function deleteById($id);
}
