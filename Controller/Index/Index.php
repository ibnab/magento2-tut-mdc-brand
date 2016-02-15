<?php
namespace Ibnab\Brand\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action
{

    protected $_brandFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Ibnab\Brand\Model\BrandFactory $brandFactory
    ) {
        $this->_brandFactory = $brandFactory;
        parent::__construct($context);        
    }

    public function execute()
    {
        /***create and save**/
        $brandModel = $this->_brandFactory->create();
        $brandModel->setName('Ibnab');
        //or $brandModel->setData('name','Ibnab');
        $brandModel->setImage('logo.png');
        //or $brandModel->setData('image','logo.png');
        $brandModel->save();
        var_dump($brandModel->getData());
        echo "<br />";
        $collection = $brandModel->getCollection();
        echo "total brand is : ".$collection->count()."<br />";
        foreach($collection as $brand):
            echo $brand->getName()."<br/ >";
            echo $brand->getImage()."<br/ >";
        endforeach;
        die();

    }
}