<?php
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(); 
?>
    <div class="row">       
        <div class="col-lg-6">   
            <?= $form->field($modelExperiencias, 'nome_empresa[]')->label('Nome da Empresa'); ?>
            <br>
        </div>
        <div class="col-lg-6">
            <?= $form->field($modelExperiencias, 'cargo[]'); ?>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($modelExperiencias, 'descricao[]')->textarea(['rows' => '6'])->label('Descrição das Atividades'); ?>
            <br>
        </div>
        <div class="col-lg-2">
            <?= $form->field($modelExperiencias, 'data_inicio[]')->input('date')->label('Data de Início'); ?>
            <br>
        </div>
        <div class="col-lg-2">
            <?= $form->field($modelExperiencias, 'data_fim[]')->input('date')->label('Data Fim'); ?>
            <br>
        </div>
        <div class="col-lg-2">
            <?= $form->field($modelExperiencias, 'atual[]')->checkbox(); ?>
            <br>
        </div>
    </div>
    <button type="button" class="btn btn-danger" id="remove-experiencia" style="margin-left:5px">Remover</button>

