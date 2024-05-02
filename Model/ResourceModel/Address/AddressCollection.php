<?php

namespace Kitchen\News\Model\ResourceModel\Address;

class AddressCollection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idName = 'entity_id';
    protected function _construct()
    {
        $this->_init(
            \Kitchen\News\Model\Address::class,
            \Kitchen\News\Model\ResourceModel\Address::class
        );
    }
}
