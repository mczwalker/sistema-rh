<?php

namespace app\modules\talentos\models;

use Yii;

/**
 * This is the model class for table "{{%informacoes_candidato}}".
 *
 * @property int $id
 * @property string $objetivo_profissional
 * @property string|null $carta_apresentacao
 * @property int $id_pessoa
 *
 * @property Pessoa $pessoa
 */
class InformacoesCandidato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%informacoes_candidato}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['objetivo_profissional', 'id_pessoa'], 'required'],
            [['id_pessoa'], 'integer'],
            [['objetivo_profissional', 'carta_apresentacao'], 'string', 'max' => 255],
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
            'objetivo_profissional' => 'Objetivo Profissional',
            'carta_apresentacao' => 'Carta Apresentacao',
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
