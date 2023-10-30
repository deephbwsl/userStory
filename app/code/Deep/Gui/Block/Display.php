<?php
namespace Deep\Gui\Block;

class Display extends \Magento\Framework\View\Element\Template
{

    public function _afterToHtml($html){
        return '<h1>Hii</h1>' . $html;
    }
}
