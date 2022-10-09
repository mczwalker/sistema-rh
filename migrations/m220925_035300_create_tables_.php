<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m220925_035300_create_tables_
 */
class m220925_035300_create_tables_ extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        
        $this->createTable('{{%tipo_escolaridade}}', [
            'id' => Schema::TYPE_PK,
            'descricao' => Schema::TYPE_STRING . ' NOT NULL',
        ]);

        $this->createTable('{{%escolaridade}}', [
            'id' => Schema::TYPE_PK,
            'id_tipo' => Schema::TYPE_INTEGER . ' NOT NULL',
            'instituicao' => Schema::TYPE_STRING . ' NOT NULL',
            'titulo_curso' => Schema::TYPE_STRING . ' NOT NULL',
            'ano_conclusao' => Schema::TYPE_DATE . ' NOT NULL',
            'id_pessoa' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->addForeignKey('FK_ID_PESSOA_ESCOLARIDADE', '{{%escolaridade}}', 'id_pessoa', '{{%pessoa}}', 'id');
        $this->addForeignKey('FK_ID_TIPO_ESCOLARIDADE', '{{%escolaridade}}', 'id_tipo', '{{%tipo_escolaridade}}', 'id');

        $this->createTable('{{%cursos}}', [
            'id' => Schema::TYPE_PK,
            'instituicao' => Schema::TYPE_STRING . ' NOT NULL',
            'titulo_curso' => Schema::TYPE_STRING . ' NOT NULL',
            'carga_horaria' => Schema::TYPE_CHAR,
            'id_pessoa' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->addForeignKey('FK_ID_PESSOA_CURSOS', '{{%cursos}}', 'id_pessoa', '{{%pessoa}}', 'id');

        $this->createTable('{{%experiencias}}', [
            'id' => Schema::TYPE_PK,
            'nome_empresa' => Schema::TYPE_STRING . ' NOT NULL',
            'cargo' => Schema::TYPE_STRING . ' NOT NULL',
            'descricao' => Schema::TYPE_STRING,
            'id_pessoa' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->addForeignKey('FK_ID_PESSOA_EXPERIENCIAS', '{{%cursos}}', 'id_pessoa', '{{%pessoa}}', 'id');

        $this->createTable('{{%informacoes_candidato}}', [
            'id' => Schema::TYPE_PK,
            'objetivo_profissional' => Schema::TYPE_STRING . ' NOT NULL',
            'carta_apresentacao' => Schema::TYPE_STRING,
            'id_pessoa' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->addForeignKey('FK_ID_PESSOA_INFORMACOES', '{{%informacoes_candidato}}', 'id_pessoa', '{{%pessoa}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220925_035300_create_tables_ cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220925_035300_create_tables_ cannot be reverted.\n";

        return false;
    }
    */
}
