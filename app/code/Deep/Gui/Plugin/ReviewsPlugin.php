<?php

namespace Deep\Gui\Plugin;

use Magento\Catalog\Model\Product;

class ReviewsPlugin
{

    public function afterGetPrice(Product $subject, $result)
    {
        $result = 100.00;
        return $result;
    }
}