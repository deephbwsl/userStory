<?php
namespace Dj\Rj\Block\Message;

class Message extends \Magento\Framework\View\Element\Template
{
    protected function _prepareLayout(){
        parent::_prepareLayout();

        $pageMainTitle = $this->getLayout()->getBlock('page.main.title');

        if ($pageMainTitle) {
            $pageMainTitle->setPageTitle('Magento Developer');
        }

        return $this;

    }

    public function getSub():string{
        return "learn Magento2 here";
    }
}
