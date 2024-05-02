<?php

namespace Kitchen\News\Model\ResourceModel\Customer;

class CustomerCollection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idName = 'customer_id';
    protected function _construct()
    {
        $this->_init(
            \Kitchen\News\Model\Customer::class,
            \Kitchen\News\Model\ResourceModel\Customer::class
        );
    }
}
