<?php

namespace app\modules\talentos\models;

use Yii;

/**
 * This is the model class for table "{{%experiencias}}".
 *
 * @property int $id
 * @property string $nome_empresa
 * @property string $cargo
 * @property string|null $descricao
 * @property int $id_pessoa
 * @property int|null $atual
 * @property string|null $data_inicio
 * @property string|null $data_fim
 */
class Experiencias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%experiencias}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome_empresa', 'cargo', 'id_pessoa'], 'required'],
            [['id_pessoa', 'atual'], 'integer'],
            [['data_inicio', 'data_fim'], 'safe'],
            [['nome_empresa', 'cargo', 'descricao'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome_empresa' => 'Nome Empresa',
            'cargo' => 'Cargo',
            'descricao' => 'Descricao',
            'id_pessoa' => 'Id Pessoa',
            'atual' => 'Atual',
            'data_inicio' => 'Data Inicio',
            'data_fim' => 'Data Fim',
        ];
    }
}
