<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SoNganh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="so-nganh-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'diachi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dienthoai')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'website')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fax')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ten')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lat')->textInput() ?>
    <?= $form->field($model, 'lon')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
