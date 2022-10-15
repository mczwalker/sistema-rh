<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m221009_231207_add_foreign_key_to_user_table
 */
class m221009_231207_add_foreign_key_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'id_pessoa', Schema::TYPE_INTEGER);
        $this->addForeignKey('fk_pessoa_id_tbl_user', '{{%user}}', 'id_pessoa', '{{%pessoa}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {   
        $this->dropForeignKey('fk_pessoa_id_tbl_user', '{{%user}}');
        $this->dropColumn('{{%user}}', 'id_pessoa');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221009_231207_add_foreign_key_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
