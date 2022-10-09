<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m220926_113352_ajuste_tabela_escolaridade
 */
class m220926_113352_ajuste_tabela_escolaridade extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%escolaridade}}', 'ano_conclusao', Schema::TYPE_DATE);
        $this->addColumn('{{%escolaridade}}', 'andamento', Schema::TYPE_INTEGER);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220926_113352_ajuste_tabela_escolaridade cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220926_113352_ajuste_tabela_escolaridade cannot be reverted.\n";

        return false;
    }
    */
}
