<?php
namespace Magestore\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Display extends \Magento\Framework\View\Element\Template
{
    protected $_postFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magestore\HelloWorld\Model\PostFactory $postFactory
    )
    {
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('Hello Mars');
    }

    public function getPostCollection() {
        $post = $this->_postFactory->create();
        return $post->getCollection();
    }
}