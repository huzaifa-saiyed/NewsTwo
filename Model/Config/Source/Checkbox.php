<?php

namespace Kitchen\News\Model\Config\Source;

/**
 * Used in creating options for getting product type value
 *
 */
class Checkbox
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '0', 'label'=>__('Magento Developer')],
            ['value' => '1', 'label'=>__('QA Tester')],
            ['value' => '2', 'label'=>__('Frontend Developer')]
        ];
    }
}