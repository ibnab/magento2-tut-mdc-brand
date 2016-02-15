<?php
namespace Ibnab\Brand\Model;

class Brand extends \Magento\Framework\Model\AbstractModel
{

    protected function _construct()
    {
        $this->_init('Ibnab\Brand\Model\ResourceModel\Brand');
    }

}
