<?php

namespace Kitchen\News\Model;

class Gallery extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this->_init(\Kitchen\News\Model\ResourceModel\Gallery::class);
    }
}
