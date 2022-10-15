<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m221009_225007_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

		// Create user table
		$this->createTable('{{%user}}', array(
			'id'                 => 'pk',
			'username'           => 'string not null',
			'auth_key'           => 'varchar(32) not null',
			'password_hash'      => 'string not null',
			'confirmation_token' => 'string',
			'status'             => 'int not null default 1',
			'superadmin'         => 'smallint default 0',
			'created_at'         => 'int not null',
			'updated_at'         => 'int not null',
		), $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
