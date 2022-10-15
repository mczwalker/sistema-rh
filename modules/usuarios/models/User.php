<?php

namespace app\modules\usuarios\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $confirmation_token
 * @property int $status
 * @property int|null $superadmin
 * @property int $created_at
 * @property int $updated_at
 */
class User extends \yii\db\ActiveRecord
{

    public $repeat_password;
    public $password;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', /*'created_at', 'updated_at'*/], 'required'],
            [['status', 'superadmin', /*'created_at', 'updated_at'*/], 'integer'],
            [['username', 'confirmation_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],

            ['password', 'required'],
			['password', 'string', 'max' => 255],
			['password', 'trim'],

			['repeat_password', 'required'],
			['repeat_password', 'compare', 'compareAttribute'=>'password', 'message' => 'As senhas não conferem!'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Nome de Usuário',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Senha',
            'confirmation_token' => 'Confirmation Token',
            'status' => 'Status',
            'superadmin' => 'Superadmin',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
