<?php
namespace Deep\Gui\Controller\Hello;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;


class Hello extends Action{
    protected $pageFactory;

    public function __construct(Context $context ,PageFactory $pageFactory ){
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute(){
        $resultPage = $this->pageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Hello World'));
        return $resultPage;
    }
}