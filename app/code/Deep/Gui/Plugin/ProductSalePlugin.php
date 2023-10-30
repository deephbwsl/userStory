<?php

namespace Deep\Gui\Plugin;

class ProductSalePlugin
{
    public function afterGetName( \Magento\Catalog\Model\Product $subject, $result){
        if($subject->getFinalPrice() < 60){
            $result = ' On Sale!';
        }
        return $result;
    }
}