<?php
namespace Deep\Gui\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\Request\Http;
use Magento\Framework\App\Response\Http as HttpResponse;

class Redirect404 implements ObserverInterface
{
    protected $request;
    protected $response;

    public function __construct(
        Http $request,
        HttpResponse $response
    ) {
        $this->request = $request;
        $this->response = $response;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if ($this->response->getHttpResponseCode() == 404) {
            
            $this->response->setRedirect('/contact'); 
        }
    }
}
