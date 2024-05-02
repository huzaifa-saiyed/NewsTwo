<?php

namespace Kitchen\News\Model;

class Customer extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this->_init(\Kitchen\News\Model\ResourceModel\Customer::class);
    }
}
