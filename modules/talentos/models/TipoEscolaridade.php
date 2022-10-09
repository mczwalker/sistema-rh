<?php

namespace app\modules\talentos\models;

use Yii;

/**
 * This is the model class for table "{{%tipo_escolaridade}}".
 *
 * @property int $id
 * @property string $descricao
 *
 * @property Escolaridade[] $escolaridades
 */
class TipoEscolaridade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tipo_escolaridade}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao'], 'required'],
            [['descricao'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * Gets query for [[Escolaridades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEscolaridades()
    {
        return $this->hasMany(Escolaridade::class, ['id_tipo' => 'id']);
    }
}
