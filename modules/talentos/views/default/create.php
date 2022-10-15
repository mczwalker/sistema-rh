<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$list = ['M' => 'Masculino', 'F' => 'Feminino'];
$listaEscolaridade = ['1' => 'Fundamental', '2' => 'Médio', '3' => 'Superior', '4' => 'Especialização/MBA', '5' => 'Mestrado', '6' => 'Doutorado', '7' => 'Pós-Doutorado'];
?>

<?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <h3> Dados Pessoais </h3>
        <div class="col-lg-4">   
            <?= $form->field($modelPessoa, 'nome'); ?>
            <br>
        </div>
        <div class="col-lg-2">   
            <?= $form->field($image, 'imageFile')->fileInput() ?>
            <br>
        </div>
        <div class="col-lg-2">
            <?= $form->field($modelPessoa, 'data_nascimento')->input('date')->label('Data de Nascimento'); ?>
            <br>
        </div>
        <div class="col-lg-2">
            <?= $form->field($modelPessoa, 'sexo')->dropDownList($list, ['prompt' => 'Selecione']); ?>
            <br>
        </div>
        <div class="col-lg-2">
            <?= $form->field($modelPessoa, 'telefone'); ?>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($modelPessoa, 'email'); ?>
        </div>
    </div><br>
    <div class="row">
        <h3> Experiências Profissionais </h3>
        <div class="col-lg-6">   
            <?= $form->field($modelExperiencias, 'nome_empresa')->label('Nome da Empresa'); ?>
            <br>
        </div>
        <div class="col-lg-6">
            <?= $form->field($modelExperiencias, 'cargo'); ?>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($modelExperiencias, 'descricao')->textarea(['rows' => '6'])->label('Descrição das Atividades'); ?>
            <br>
        </div>
        <div class="col-lg-2">
            <?= $form->field($modelExperiencias, 'data_inicio')->input('date')->label('Data de Início'); ?>
            <br>
        </div>
        <div class="col-lg-2">
            <?= $form->field($modelExperiencias, 'data_fim')->input('date')->label('Data Fim'); ?>
            <br>
        </div>
        <div class="col-lg-2">
            <?= $form->field($modelExperiencias, 'atual')->checkbox(); ?>
            <br>
        </div>
    </div>
    <div class="row">
        <h3> Escolaridade </h3>
        <div class="col-lg-6">   
            <?= $form->field($modelEscolaridade, 'instituicao'); ?>
            <br>
        </div>
        <div class="col-lg-4">
            <?= $form->field($modelEscolaridade, 'titulo_curso'); ?>
            <br>
        </div>
        <div class="col-lg-2">
            <?= $form->field($modelEscolaridade, 'id_tipo')->dropDownList($listaEscolaridade, ['prompt' => 'Selecione'])->label('Nível'); ?>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <?= $form->field($modelEscolaridade, 'ano_conclusao')->input('date')->label('Ano de Conclusão'); ?>
            <br>
        </div>
        <div class="col-lg-2">
            <?= $form->field($modelEscolaridade, 'andamento')->checkbox(); ?>
            <br>
        </div>
    </div>
    <div class="row">
        <h3> Cursos Complementares </h3>
        <div class="col-lg-6">   
            <?= $form->field($modelCursos, 'instituicao'); ?>
            <br>
        </div>
        <div class="col-lg-4">
            <?= $form->field($modelCursos, 'titulo_curso'); ?>
            <br>
        </div>
        <div class="col-lg-2">
            <?= $form->field($modelCursos, 'carga_horaria'); ?>
            <br>
        </div>
    </div>
    <div class="row">
        <h3> Apresentação e Objetivo Profissional </h3>
        <div class="col-lg-6">
            <?= $form->field($modelInformacoesCandidato, 'objetivo_profissional')->label('Objetivo Profissional'); ?>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($modelInformacoesCandidato, 'carta_apresentacao')->textarea(['rows' => '6'])->label('Carta de Apresentação'); ?>
        </div>
    </div>
    <br>
    
    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>