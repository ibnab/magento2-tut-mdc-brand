<?php
namespace Ibnab\Brand\Model\ResourceModel;

class Brand extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('ibnab_brand', 'brand_id');
    }
}