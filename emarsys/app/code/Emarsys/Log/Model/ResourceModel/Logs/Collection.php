<?php
/**
 * @category   Emarsys
 * @package    Emarsys_Log
 * @copyright  Copyright (c) 2016 Kensium Solution Pvt.Ltd. (http://www.kensiumsolutions.com/)
 */

namespace Emarsys\Log\Model\ResourceModel\Logs;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Emarsys\Log\Model\Logs', 'Emarsys\Log\Model\ResourceModel\Logs');
    }
}