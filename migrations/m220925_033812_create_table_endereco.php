<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m220925_033812_create_table_endereco
 */
class m220925_033812_create_table_endereco extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%endereco}}', [
            'id' => Schema::TYPE_PK,
            'cep' => Schema::TYPE_STRING . ' NOT NULL',
            'rua' => Schema::TYPE_CHAR . ' NOT NULL',
            'numero' => Schema::TYPE_CHAR . ' NOT NULL',
            'bairro' => Schema::TYPE_STRING,
            'cidade' => Schema::TYPE_STRING,
            'estado' => Schema::TYPE_STRING,
            'id_pessoa' => Schema::TYPE_INTEGER
        ]);

        $this->addForeignKey('FK_ID_PESSOA', '{{%endereco}}', 'id_pessoa', '{{%pessoa}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220925_033812_create_table_endereco cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220925_033812_create_table_endereco cannot be reverted.\n";

        return false;
    }
    */
}
