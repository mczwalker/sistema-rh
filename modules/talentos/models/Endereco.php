<?php

namespace app\modules\talentos\models;

use Yii;

/**
 * This is the model class for table "{{%endereco}}".
 *
 * @property int $id
 * @property string $cep
 * @property string $rua
 * @property string $numero
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $estado
 * @property int|null $id_pessoa
 *
 * @property Pessoa $pessoa
 */
class Endereco extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%endereco}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cep', 'rua', 'numero'], 'required'],
            [['id_pessoa'], 'integer'],
            [['cep', 'bairro', 'cidade', 'estado'], 'string', 'max' => 255],
            [['rua', 'numero'], 'string', 'max' => 1],
            [['id_pessoa'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoa::class, 'targetAttribute' => ['id_pessoa' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cep' => 'Cep',
            'rua' => 'Rua',
            'numero' => 'Numero',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'id_pessoa' => 'Id Pessoa',
        ];
    }

    /**
     * Gets query for [[Pessoa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPessoa()
    {
        return $this->hasOne(Pessoa::class, ['id' => 'id_pessoa']);
    }
}
