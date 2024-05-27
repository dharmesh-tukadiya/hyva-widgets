<?php

declare(strict_types=1);

namespace DnTukadiya\HyvaWidgets\Block\Adminhtml;

use Hyva\Widgets\Block\WidgetConfigs\Rows;

class BrandSlider extends Rows
{
    protected $rows = [
        'brand_image' => [
            'label' => 'Brand Image',
            'type' => 'image'
        ],
        'external_brand_image' => [
            'label' => 'External Brand Image URL',
            'type' => 'text'
        ],
        'brand_url' => [
            'label' => 'Brand URL',
            'type' => 'text'
        ]
    ];
}
