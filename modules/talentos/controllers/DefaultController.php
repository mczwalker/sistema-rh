<?php

namespace app\modules\talentos\controllers;

use app\modules\talentos\models\Pessoa;
use app\modules\talentos\models\Endereco;
use app\modules\talentos\models\Escolaridade;
use app\modules\talentos\models\InformacoesCandidato;
use app\modules\talentos\models\Cursos;
use app\modules\talentos\models\Experiencias;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use Yii;

/**
 * Default controller for the `talentos` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate(){
        $modelPessoa = new Pessoa();
        $modelEndereco = new Endereco();
        $modelEscolaridade = new Escolaridade();
        $modelInformacoesCandidato = new InformacoesCandidato();
        $modelCursos = new Cursos();
        $modelExperiencias = new Experiencias();
        
        $post = Yii::$app->request->post();

        if($post){
            $modelPessoa->load($post);
            $modelPessoa->save();

            $modelExperiencias->load($post);
            $modelExperiencias->id_pessoa = $modelPessoa->id;
            $modelExperiencias->save();

            $modelEscolaridade->load($post);
            $modelEscolaridade->id_pessoa = $modelPessoa->id;
            $modelEscolaridade->save();

            $modelCursos->load($post);
            $modelCursos->id_pessoa = $modelPessoa->id;
            $modelCursos->save();

            $modelInformacoesCandidato->load($post);
            $modelInformacoesCandidato->id_pessoa = $modelPessoa->id;
            $modelInformacoesCandidato->save();
        }
        
        return $this->render('create', [
            'modelPessoa' => $modelPessoa,
            'modelEndereco' => $modelEndereco,
            'modelEscolaridade' => $modelEscolaridade,
            'modelInformacoesCandidato' => $modelInformacoesCandidato,
            'modelCursos' => $modelCursos,
            'modelExperiencias' => $modelExperiencias
        ]);
    }
}
