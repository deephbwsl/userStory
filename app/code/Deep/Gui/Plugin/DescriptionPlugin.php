<?php
namespace Deep\Gui\Plugin;

use Magento\Catalog\Block\Product\View\Description;

class DescriptionPlugin
{
    public function afterToHtml( Description $subject, $result){
        $result = 'Sample Description';
        return $result;
    }

    
}
