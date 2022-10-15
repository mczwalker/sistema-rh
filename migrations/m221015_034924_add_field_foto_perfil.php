<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m221015_034924_add_field_foto_perfil
 */
class m221015_034924_add_field_foto_perfil extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%pessoa}}', 'foto_perfil', Schema::TYPE_STRING);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%pessoa}}', 'foto_perfil');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221015_034924_add_field_foto_perfil cannot be reverted.\n";

        return false;
    }
    */
}
