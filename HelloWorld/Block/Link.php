<?php

namespace Magestore\HelloWorld\Block;

class Link extends \Magento\Framework\View\Element\Html\Link
{
    protected function _toHtml()
    {
        if (false != $this->getTemplate()) {
            return parent::_toHtml();
        }
        return '<a><a' . $this->getLinkAttributes() . '>' . $this->escapeHtml($this->getLabel()) . '</a></li>';
    }
}