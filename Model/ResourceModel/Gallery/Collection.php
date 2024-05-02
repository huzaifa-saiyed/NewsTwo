<?php

namespace Kitchen\News\Model\ResourceModel\Gallery;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idName = 'news_id';
    protected function _construct()
    {
        $this->_init(
            \Kitchen\News\Model\Gallery::class,
            \Kitchen\News\Model\ResourceModel\Gallery::class
        );
    }
}
