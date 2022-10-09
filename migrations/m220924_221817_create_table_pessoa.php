<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m220924_221817_create_table_pessoa
 */
class m220924_221817_create_table_pessoa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pessoa}}', [
            'id' => Schema::TYPE_PK,
            'nome' => Schema::TYPE_STRING . ' NOT NULL',
            'data_nascimento' => Schema::TYPE_DATE . ' NOT NULL',
            'sexo' => Schema::TYPE_CHAR . ' NOT NULL',
            'telefone' => Schema::TYPE_STRING
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220924_221817_create_table_pessoa cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220924_221817_create_table_pessoa cannot be reverted.\n";

        return false;
    }
    */
}
