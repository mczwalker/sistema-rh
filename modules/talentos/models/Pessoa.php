<?php

namespace app\modules\talentos\models;

use Yii;
use app\modules\usuarios\models\User;

/**
 * This is the model class for table "{{%pessoa}}".
 *
 * @property int $id
 * @property string $nome
 * @property string $data_nascimento
 * @property string $sexo
 * @property string|null $telefone
 * @property string $email
 * @property string|null $email
 * @property string|null $foto_perfil
 *
 * @property Curso[] $cursos
 * @property Endereco[] $endereco
 * @property Escolaridade[] $escolaridade
 * @property Experiencia[] $experiencias
 * @property InformacoesCandidato[] $informacoesCandidatos
 * @property User[] $user
 */

 
class Pessoa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%pessoa}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'data_nascimento', 'sexo', 'email'], 'required'],
            [['email'], 'email'],
            [['data_nascimento'], 'safe'],
            [['nome', 'telefone', 'foto_perfil'], 'string', 'max' => 255],
            [['sexo'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'data_nascimento' => 'Data Nascimento',
            'sexo' => 'Sexo',
            'telefone' => 'Telefone',
        ];
    }

    /**
     * Gets query for [[Cursos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCursos()
    {
        return $this->hasMany(Curso::class, ['id_pessoa' => 'id']);
    }

    /**
     * Gets query for [[Enderecos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEndereco()
    {
        return $this->hasMany(Endereco::class, ['id_pessoa' => 'id']);
    }

    /**
     * Gets query for [[Escolaridades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEscolaridade()
    {
        return $this->hasMany(Escolaridade::class, ['id_pessoa' => 'id']);
    }

    /**
     * Gets query for [[InformacoesCandidatos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInformacoesCandidatos()
    {
        return $this->hasMany(InformacoesCandidato::class, ['id_pessoa' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser() 
    { 
        return $this->hasOne(User::class, ['id_pessoa' => 'id']); 
    }

    /**
     * Gets query for [[Experiencia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExperiencias() 
    { 
        return $this->hasMany(Experiencias::class, ['id_pessoa' => 'id']); 
    }
}
