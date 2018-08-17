<?php
namespace Magestore\HelloWorld\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'magestore_helloworld_post';

    protected $_cacheTag = 'magestore_helloworld_post';

    protected $_eventPrefix = 'magestore_helloworld_post';

    protected function _construct()
    {
        $this->_init('Magestore\HelloWorld\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' .$this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
}