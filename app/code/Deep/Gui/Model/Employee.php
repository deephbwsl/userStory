<?php

namespace Deep\Gui\Model;

use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Deep\Gui\Model\ResourceModel\Employee');
    }
}
