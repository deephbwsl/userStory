<?php
namespace Deep\Gui\Block;

use Magento\Framework\View\Element\Template;
use Deep\Gui\Model\ResourceModel\Employee\Collection;

class Table extends Template
{
    protected $employeeCollection;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        Collection $employeeCollection,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->employeeCollection = $employeeCollection;
    }

    public function getEmployeeData()
    {
        return $this->employeeCollection->getItems();
    }

    public function getEmployeeCount(){
        return $this->employeeCollection->getSize();
    }
}
