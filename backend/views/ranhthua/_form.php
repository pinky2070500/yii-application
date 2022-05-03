<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Ranhthua */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ranhthua-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'thuaid')->textInput() ?>

    <?= $form->field($model, 'xaid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shbando')->textInput() ?>

    <?= $form->field($model, 'shthua')->textInput() ?>

    <?= $form->field($model, 'dientich')->textInput() ?>

    <?= $form->field($model, 'dientichpl')->textInput() ?>

    <?= $form->field($model, 'maloaidat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'khloaidat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diadanh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtsd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tenchu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diachi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mdsd2003')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kh2003')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mscolor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shthuatam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtthocu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dacapgcn')->textInput() ?>

    <?= $form->field($model, 'geom')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
