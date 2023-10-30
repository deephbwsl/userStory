<?php

namespace Deep\Gui\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Deep\Gui\View\Test;

class Index extends Action
{
    protected $test;
    
    public function __construct(Context $context, Test $test)
    {
        parent::__construct($context);
        $this->test = $test;
    }

    public function execute()
    {
        $this->test->displayParams();
    }
}
