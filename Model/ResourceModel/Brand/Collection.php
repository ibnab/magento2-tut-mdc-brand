<?php
namespace Ibnab\Brand\Model\ResourceModel\Brand;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Ibnab\Brand\Model\Brand', 'Ibnab\Brand\Model\ResourceModel\Brand');
    }
}
