<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Kitchen\News\Model\ResourceModel\Schedule;

/**
 * Schedules Collection
 *
 * @api
 * @since 100.0.2
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init(\Kitchen\News\Model\Schedule::class, \Kitchen\News\Model\ResourceModel\Schedule::class);
    }
}
