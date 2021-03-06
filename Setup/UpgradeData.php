<?php
/**
 * @category   Emarsys
 * @package    Emarsys_Emarsys
 * @copyright  Copyright (c) 2017 Emarsys. (http://www.emarsys.net/)
 */
namespace Emarsys\Emarsys\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class UpgradeSchema
 * @package Emarsys\Emarsys\Setup
 */
class UpgradeData implements UpgradeDataInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), "1.0.13", "<")) {
            $tableName = $setup->getTable('emarsys_customer_field_mapping');
            $connection = $setup->getConnection();
            if ($connection->isTableExists($tableName)) {
                $connection->delete($tableName,
                    ['emarsys_contact_field in (?)' => [0, 27, 28, 29, 30, 33, 34, 36, 47, 48]]
                );
            }
        }
        $setup->endSetup();
    }
}
