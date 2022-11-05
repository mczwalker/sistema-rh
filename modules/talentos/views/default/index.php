<?php
use yii\grid\GridView;
use yii\helpers\Html;

?>
<div class="talentos-default-index">
    <?=
        $this->render('_form');
    ?>
    <div class="row">
        <?= GridView::widget([
            'dataProvider' => $provider,
            'columns' => [
                [   
                    'attribute' => 'foto_perfil',
                    'format' => 'html',
                    'label' => 'Foto',
                    'value' => function ($model) {
                        if(!empty($model->foto_perfil)){
                            return Html::img('@web/uploads/'.$model->foto_perfil, ['width'=>'80', 'alt' => 'Foto Candidato']);
                        }

                        return Html::img('@web/uploads/avatar.png', ['width'=>'80', 'alt' => 'Foto Candidato']);
                         
                    },
                    'headerOptions' => ['style' => 'width: 10%'],
                    'contentOptions' => ['style'=>'display: flex; justify-content: center'],
                ],
                'nome',
                'email',
                [
                    'label' => 'Experiencias',
                    'value' => function($model){

                        foreach($model->experiencias as $xp){
                            return $xp->cargo;
                        };

                    }
                ]
            ],
        ]);
        ?>
    </div>
</div>
