<?php
namespace Deep\Gui\Block;

class Form extends \Magento\Framework\View\Element\Template
{
    public function getFormAction(){
        return $this->getUrl('mod1/employee/employee');
    }    
}
