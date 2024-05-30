<?php

declare(strict_types=1);

namespace DnTukadiya\HyvaWidgets\Block\Widget;

use Magento\Widget\Block\BlockInterface;
use Magento\Framework\DataObject;

class CategoryCollection extends \Hyva\Widgets\Block\Widgets\AbstractColumns implements BlockInterface
{
    /**
     * @var string
     */
    protected $_template = 'DnTukadiya_HyvaWidgets::widget/category-collection.phtml';

    /**
     * Fetches `conditions` containing serialized items then turns them into DataObjects
     *
     * @return array|mixed
     */
    public function getCategoryImages()
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
    protected function _toHtml()
    {
        if ($this->getData('status') != "0") {
            return parent::_toHtml();
        } else {
            return null;
        }
    }
}
