<?php
namespace Kens\Hello\Controller\Index;

class Post extends \Magento\Framework\App\Action\Action
{
	
     public function execute()
    {
       
            $sku = $this->getRequest()->getParam('sku_test');
            $qty = $this->getRequest()->getParam('qty_test');
			$objectManager = Magento\Framework\App\ObjectManager::getInstance();
			$productId = $objectManager->get('Magento\Catalog\Model\Product')->getIdBySku($sku);
			print_r($productId);
            echo $sku.'<br/>';
			echo $qty.'<br/>';
			echo $productId.'<br/>';

    }
}
