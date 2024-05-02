<?php

namespace Kitchen\News\Model;

class Address extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this->_init(\Kitchen\News\Model\ResourceModel\Address::class);
    }
}
