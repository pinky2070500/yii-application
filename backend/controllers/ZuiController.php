<?php

namespace backend\controllers;

use yii\web\Controller;

class ZuiController extends Controller
{
    public function actionIndex (){
        return $this->render('index');
    }

}