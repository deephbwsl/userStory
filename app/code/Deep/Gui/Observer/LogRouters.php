<?php 
// app/code/YourVendor/YourModule/Observer/LogRouters.php
namespace Deep\Gui\Observer;



use Magento\Framework\App\Route\Config;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogRouters extends Config implements  ObserverInterface
{
    public $log;
    public $config;
    public function  __construct(LoggerInterface $log, Config $config){

        $this->log = $log;
        $this->config = $config;
    }

    public function execute(Observer $observer )
    {
        $temparr = [];

        $routers = $this->config->_getRoutes($scope = null);
        $keysArray = $routers;

        foreach($keysArray as $key=>$value){
            $temparr[$key] = $key;
        }
        $arr = array_values($temparr);
        $stringValues = implode(', ', $arr);
        $this->log->info("Available Routes " . $stringValues);

        // dump($keysArray);
        // print_r($stringValues);
    }
}
