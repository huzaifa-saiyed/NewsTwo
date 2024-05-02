<?php

namespace Kitchen\News\Model\Config;

use Magento\Framework\Option\ArrayInterface;
use Magento\User\Model\ResourceModel\User\CollectionFactory;

class Options implements ArrayInterface
{
    public function toOptionArray()
    {

        $options = [];
        $options[] = [
            'value' => '0',
            'label' => 'Cricket',
        ];
        $options[] = [
            'value' => '1',
            'label' => 'Coding',
        ];
        $options[] = [
            'value' => '2',
            'label' => 'Driving',
        ];

        return $options;
    }
}
