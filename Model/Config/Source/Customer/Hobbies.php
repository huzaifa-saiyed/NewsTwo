<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Kitchen\News\Model\Config\Source\Customer;

use Kitchen\News\Model\CustomerFactory;

/**
 * @api
 * @since 100.0.2
 */
class Hobbies implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */

    protected $customerFactory;

    public function __construct(
        CustomerFactory $customerFactory
    ) {
        $this->customerFactory = $customerFactory;
    }

    public function toOptionArray()
    {
        return [
            ['value' => 'Reading', 'label' => 'Reading'],
            ['value' => 'Sports', 'label' => 'Sports'],
            ['value' => 'Fitness', 'label' => 'Fitness'],
            ['value' => 'Gardening', 'label' => 'Gardening'],
            ['value' => 'Cooking and Baking', 'label' => 'Cooking and Baking'],
            ['value' => 'Art and Crafts', 'label' => 'Art and Crafts'],
            ['value' => 'Music', 'label' => 'Music'],
            ['value' => 'Traveling', 'label' => 'Traveling'],
            ['value' => 'Photography', 'label' => 'Photography'],
            ['value' => 'Gaming', 'label' => 'Gaming'],
            ['value' => 'Writing', 'label' => 'Writing']
        ];
        
        }
    }
