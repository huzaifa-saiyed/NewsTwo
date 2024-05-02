<?php

namespace Kitchen\News\Model;

class Schedule extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this->_init(\Kitchen\News\Model\ResourceModel\Schedule::class);
    }
}
