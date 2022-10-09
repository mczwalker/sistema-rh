<?php

namespace app\modules\talentos\models;

use Yii;

/**
 * This is the model class for table "{{%escolaridade}}".
 *
 * @property int $id
 * @property int $id_tipo
 * @property string $instituicao
 * @property string $titulo_curso
 * @property string|null $ano_conclusao
 * @property int $id_pessoa
 * @property int|null $andamento
 *
 * @property Pessoa $pessoa
 * @property TipoEscolaridade $tipo
 */
class Escolaridade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%escolaridade}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tipo', 'instituicao', 'titulo_curso', 'id_pessoa'], 'required'],
            [['id_tipo', 'id_pessoa', 'andamento'], 'integer'],
            [['ano_conclusao'], 'safe'],
            [['instituicao', 'titulo_curso'], 'string', 'max' => 255],
            [['id_pessoa'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoa::class, 'targetAttribute' => ['id_pessoa' => 'id']],
            [['id_tipo'], 'exist', 'skipOnError' => true, 'targetClass' => TipoEscolaridade::class, 'targetAttribute' => ['id_tipo' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_tipo' => 'Id Tipo',
            'instituicao' => 'Instituicao',
            'titulo_curso' => 'Titulo Curso',
            'ano_conclusao' => 'Ano Conclusao',
            'id_pessoa' => 'Id Pessoa',
            'andamento' => 'Andamento',
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
     * Gets query for [[Tipo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(TipoEscolaridade::class, ['id' => 'id_tipo']);
    }
}
