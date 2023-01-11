<?php

namespace Pratik\AdminGrid\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Post
 * @package Pratik\AdminGrid\Model\ResourceModel
 */
class Post extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('pratik_admin_grid', 'entity_id');
    }
}
