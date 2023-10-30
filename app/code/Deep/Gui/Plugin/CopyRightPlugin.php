<?php
namespace Deep\Gui\Plugin;
use Magento\Theme\Block\Html\Footer;
class CopyRightPlugin{

    public function afterGetCopyright(Footer $subject,$result){
        $result = "changed";
        return $result;
        
    }

}