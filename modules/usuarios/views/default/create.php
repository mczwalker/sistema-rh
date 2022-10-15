<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<h3> CADASTRO DE USUÁRIOS </h3>
<?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-4">   
            <?= $form->field($modelUsuario, 'username'); ?>
            <br>
        </div>
        <div class="col-lg-4">   
            <?= $form->field($modelUsuario, 'password'); ?>
            <br>
        </div>
        <div class="col-lg-4">   
            <?= $form->field($modelUsuario, 'repeat_password')->label('Repetir Senha'); ?>
            <br>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>