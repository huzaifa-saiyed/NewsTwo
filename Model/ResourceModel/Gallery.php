<?php

namespace Kitchen\News\Model\ResourceModel;

class Gallery extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('kitchen_News', 'news_id');
    }
}
