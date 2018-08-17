<?php
namespace Magestore\HelloWorld\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'magestore_helloworld_post_collection';
    protected $_eventObject = 'post_collection';

    protected function _construct()
    {
        $this->_init('Magestore\HelloWorld\Model\Post', 'Magestore\HelloWorld\Model\ResourceModel\Post');
    }
}