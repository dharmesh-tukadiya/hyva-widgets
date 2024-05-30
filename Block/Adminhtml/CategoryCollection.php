<?php

declare(strict_types=1);

namespace DnTukadiya\HyvaWidgets\Block\Adminhtml;

use Hyva\Widgets\Block\WidgetConfigs\Rows;

class CategoryCollection extends Rows
{
    protected $rows = [
        'category_image' => [
            'label' => 'Category Image',
            'type' => 'image'
        ],
        'category_name' => [
            'label' => 'Category Name',
            'type' => 'text'
        ],
        'category_description' => [
            'label' => 'Category Description',
            'type' => 'text'
        ],
        'external_category_image' => [
            'label' => 'External Category Image URL',
            'type' => 'text'
        ],
        'category_url' => [
            'label' => 'Category URL',
            'type' => 'text'
        ]
    ];
}
