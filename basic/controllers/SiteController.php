<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Tarif;

class SiteController extends Controller
{

    public function actionIndex()
    {
        $tarifs = Tarif::find()->all();
        
        return $this->render('index', compact($tarifs));
    }
}
