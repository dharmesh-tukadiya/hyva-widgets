<?php

namespace DnTukadiya\HyvaWidgets\Block\Widget\Field;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Color extends Template implements BlockInterface
{
    public function prepareElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $defaultColor = "#D1D5DB";
        $value = $element->getValue() ?? $defaultColor;
        $element->setData('after_element_html', "
        <div style='display:flex;flex-direction:row;gap:10px;justify-content:start;align-items:center;'>
            <input type='text' value='{$value}' id='{$element->getHtmlId()}' name='{$element->getName()}' oninput='document.querySelector(\"#{$element->getHtmlId()}-color-picker\").value = this.value'>
            <input type='color' id='{$element->getHtmlId()}-color-picker'  oninput='document.querySelector(\"#{$element->getHtmlId()}\").value = this.value' value='{$value}'>
        </div>
        ");
        $element->setValue(null);
        return $element;
    }
}
