<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m220926_010117_alter_column_data_nascimento_table_pessoa
 */
class m220926_010117_alter_column_data_nascimento_table_pessoa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%pessoa}}', 'data_nascimento', Schema::TYPE_DATE . ' NOT NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220926_010117_alter_column_data_nascimento_table_pessoa cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220926_010117_alter_column_data_nascimento_table_pessoa cannot be reverted.\n";

        return false;
    }
    */
}
