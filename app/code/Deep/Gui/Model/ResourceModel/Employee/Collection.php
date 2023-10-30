<?php

namespace Deep\Gui\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Deep\Gui\Model\Employee', 'Deep\Gui\Model\ResourceModel\Employee');
    }
}
