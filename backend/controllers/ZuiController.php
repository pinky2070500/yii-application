<?php

namespace backend\controllers;

use app\models\UserForm;
use Yii;
use yii\web\Controller;

class ZuiController extends Controller
{
    public function actionIndex (){
        return $this->render('index');
    }

    public function actionUser(){
        $model = new UserForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->session->setFlash('success','aa');
        }
        return $this->render('user',['model'=>$model]);

    }

}