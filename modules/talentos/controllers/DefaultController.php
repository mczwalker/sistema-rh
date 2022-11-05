<?php

namespace app\modules\talentos\controllers;

use app\modules\talentos\models\Pessoa;
use app\modules\talentos\models\Endereco;
use app\modules\talentos\models\Escolaridade;
use app\modules\talentos\models\InformacoesCandidato;
use app\modules\talentos\models\Cursos;
use app\modules\talentos\models\Experiencias;
use app\modules\talentos\models\TipoEscolaridade;
use app\modules\talentos\models\search\PessoaSearch;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
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
    {   $params = \Yii::$app->params;
        $searchModel = new PessoaSearch();
        $provider = $searchModel->search($params);
        return $this->render('index', [
            'provider' => $provider
        ]);
    }

    public function actionCreate(){
        $image = new UploadForm();
        $modelPessoa = new Pessoa();
        $modelEndereco = new Endereco();
        $modelEscolaridade = new Escolaridade();
        $modelInformacoesCandidato = new InformacoesCandidato();
        $modelCursos = new Cursos();
        $modelExperiencias = new Experiencias();

        $tipoEscolaridade = TipoEscolaridade::find()->asArray()->all();
        $listaEscolaridade = ArrayHelper::map($tipoEscolaridade, 'id', 'descricao');
        
        $post = Yii::$app->request->post();

        if($post){           
            $modelPessoa->load($post);
            $image->imageFile = UploadedFile::getInstance($image, 'imageFile');
            if ($image->upload()) {
                $modelPessoa->foto_perfil = $image->imageFile->name;
            }            
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
            'listaEscolaridade' => $listaEscolaridade,
            'modelInformacoesCandidato' => $modelInformacoesCandidato,
            'modelCursos' => $modelCursos,
            'modelExperiencias' => $modelExperiencias,
            'image' => $image
        ]);
    }

    public function actionAddExperiencias(){
        $this->layout = false;
        $modelExperiencias = new Experiencias();

        return $this->renderAjax('_experiencia_profissional.php',[
            'modelExperiencias' => $modelExperiencias
        ]);
    }
}
