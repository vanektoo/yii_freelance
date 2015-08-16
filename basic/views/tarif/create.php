<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tarif */

$this->title = 'Добавление нового тарифа';
$this->params['breadcrumbs'][] = ['label' => 'Тарифы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarif-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    

</div>
