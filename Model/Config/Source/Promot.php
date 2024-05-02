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
class Promot implements \Magento\Framework\Option\ArrayInterface
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
        return [
            ['value' => '0', 'label' => 'Not-Active'],
            ['value' => '1', 'label' => 'Active']
        ];
        
        }
    }
