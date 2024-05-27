<?php

declare(strict_types=1);

namespace DnTukadiya\HyvaWidgets\Block\Widget;

use Magento\Widget\Block\BlockInterface;
use Magento\Framework\DataObject;

class BrandSlider extends \Hyva\Widgets\Block\Widgets\AbstractColumns implements BlockInterface
{
    /**
     * @var string
     */
    protected $_template = 'DnTukadiya_HyvaWidgets::widget/brandslider.phtml';

    /**
     * Fetches `conditions` containing serialized items then turns them into DataObjects
     *
     * @return array|mixed
     */
    public function getBrandImages()
    {
        $content = $this->getConditions();

        if ($content && is_array($content)) {
            return array_map(
                function ($data) {
                    return new DataObject($data);
                },
                $content
            );
        }

        return $content;
    }
}
