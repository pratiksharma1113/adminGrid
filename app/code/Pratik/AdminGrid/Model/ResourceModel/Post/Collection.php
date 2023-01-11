<?php

namespace Pratik\AdminGrid\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package Pratik\AdminGrid\Model\ResourceModel\Post
 */
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Pratik\AdminGrid\Model\Post',
            'Pratik\AdminGrid\Model\ResourceModel\Post'
        );
    }
}
