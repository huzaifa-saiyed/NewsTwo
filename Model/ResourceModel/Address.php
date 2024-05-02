<?php

namespace Kitchen\News\Model\ResourceModel;

class Address extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('kcustomer', 'entity_id');
    }
}
