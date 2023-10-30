<?php
namespace Deep\Gui\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogPageHtml implements ObserverInterface
{
    protected $logger;
    protected $response;

    public function __construct(LoggerInterface $logger, \Magento\Framework\App\Response\Http $response)
    {
        $this->logger = $logger;
        $this->response = $response;
    }

    public function execute(Observer $observer)
    {
        $html = $this->response->getBody();
        $this->logger->info("Page HTML: " . $html);
    }
}
