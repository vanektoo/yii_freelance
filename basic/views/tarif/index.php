<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TarifSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Тарифы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarif-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавление нового тарифа', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary'=>'', 
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name:ntext',
            'price',
            [
                'label' => 'Цена',
                'format' => 'raw',
                'value' => function($data){
                    return Html::input('text', 'price', $data->price, array('class' => 'form-control'));
                },
            ],
            'speed',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
