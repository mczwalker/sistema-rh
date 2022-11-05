<?php

namespace app\modules\talentos\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\talentos\models\Pessoa;

/**
 * CarroSearch represents the model behind the search form of `app\modules\gfc\models\Carro`.
 */
class PessoaSearch extends Pessoa
{
    public function search($params)
    {
        $query = Pessoa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        /*
        $query->andFilterWhere([

        ]);*/


        return $dataProvider;
    }
}