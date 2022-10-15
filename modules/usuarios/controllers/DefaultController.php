<?php

namespace app\modules\usuarios\controllers;

use yii\web\Controller;
use app\modules\usuarios\models\User;
use yii\base\Security;
use Yii;

/**
 * Default controller for the `Usuarios` module
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

    public function actionCreate()
    {  
        $modelUsuario = new User();

        $post = Yii::$app->request->post();

        if($post && $modelUsuario->load($post)){
            $security = new Security();

            $modelUsuario->username = $post['User']['username'];
            $modelUsuario->auth_key = Yii::$app->security->generateRandomString();
            $modelUsuario->password_hash = $security->generatePasswordHash($post['User']['password']);
            $modelUsuario->status = 1;
            $modelUsuario->superadmin = 1; //only for testing
            $modelUsuario->id_pessoa = 2; //only for testing

            if($modelUsuario->save()){

            }else{
                
            }
            
        }

        return $this->render('create', [
            'modelUsuario' => $modelUsuario
        ]);
    }
}
