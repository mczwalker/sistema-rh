<?php

namespace app\modules\talentos\models;

use Yii;

/**
 * This is the model class for table "{{%cursos}}".
 *
 * @property int $id
 * @property string $instituicao
 * @property string $titulo_curso
 * @property string|null $carga_horaria
 * @property int $id_pessoa
 *
 * @property Pessoa $pessoa
 * @property Pessoa $pessoa0
 */
class Cursos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cursos}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['instituicao', 'titulo_curso', 'id_pessoa'], 'required'],
            [['id_pessoa'], 'integer'],
            [['instituicao', 'titulo_curso'], 'string', 'max' => 255],
            [['carga_horaria'], 'string', 'max' => 1],
            [['id_pessoa'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoa::class, 'targetAttribute' => ['id_pessoa' => 'id']],
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
            'instituicao' => 'Instituicao',
            'titulo_curso' => 'Titulo Curso',
            'carga_horaria' => 'Carga Horaria',
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

    /**
     * Gets query for [[Pessoa0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPessoa0()
    {
        return $this->hasOne(Pessoa::class, ['id' => 'id_pessoa']);
    }
}
