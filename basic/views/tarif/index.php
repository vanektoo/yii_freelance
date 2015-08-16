<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TarifSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tarifs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarif-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tarif', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'price',
            'name:ntext',
            'speed',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
