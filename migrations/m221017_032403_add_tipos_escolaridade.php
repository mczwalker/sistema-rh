<?php

use yii\db\Migration;

/**
 * Class m221017_032403_add_tipos_escolaridade
 */
class m221017_032403_add_tipos_escolaridade extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {   $escolaridade = ['Fundamental', 'Médio', 'Superior', 'Especialização/MBA', 'Mestrado', 'Doutorado', 'Pós-Doutorado'];
        
        foreach($escolaridade as $item){
            $this->insert('{{%tipo_escolaridade}}', ['descricao' => $item]);
        }
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221017_032403_add_tipos_escolaridade cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221017_032403_add_tipos_escolaridade cannot be reverted.\n";

        return false;
    }
    */
}
