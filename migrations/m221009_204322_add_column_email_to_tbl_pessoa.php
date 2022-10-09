<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m221009_204322_add_column_email_to_tbl_pessoa
 */
class m221009_204322_add_column_email_to_tbl_pessoa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%pessoa}}', 'email', Schema::TYPE_STRING);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221009_204322_add_column_email_to_tbl_pessoa cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221009_204322_add_column_email_to_tbl_pessoa cannot be reverted.\n";

        return false;
    }
    */
}
