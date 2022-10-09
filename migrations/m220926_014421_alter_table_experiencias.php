<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m220926_014421_alter_table_experiencias
 */
class m220926_014421_alter_table_experiencias extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%experiencias}}', 'atual', Schema::TYPE_INTEGER);
        $this->addColumn('{{%experiencias}}', 'data_inicio', Schema::TYPE_DATE);
        $this->addColumn('{{%experiencias}}', 'data_fim', Schema::TYPE_DATE);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220926_014421_alter_table_experiencias cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220926_014421_alter_table_experiencias cannot be reverted.\n";

        return false;
    }
    */
}
