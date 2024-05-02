<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Kitchen\News\Model\Config\Source;

use Kitchen\News\Model\GalleryFactory;

/**
 * @api
 * @since 100.0.2
 */
class Weeks implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */

    protected $galleryFactory;

    public function __construct(
        GalleryFactory $galleryFactory
    ) {
        $this->galleryFactory = $galleryFactory;
    }

    public function toOptionArray()
    {
        $option = [];
        $model = $this->galleryFactory->create();
        $data = $model->getCollection()->getItems();
        foreach ($data as $var) {
            $option[] = [
                'value' => $var['news_id'],
                'label' => __($var['news_title'])
            ];
        }
        return $option;
    }
}
