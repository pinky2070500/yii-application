<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RanhthuaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ranhthua-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'gid') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'thuaid') ?>

    <?= $form->field($model, 'xaid') ?>

    <?= $form->field($model, 'shbando') ?>

    <?php // echo $form->field($model, 'shthua') ?>

    <?php // echo $form->field($model, 'dientich') ?>

    <?php // echo $form->field($model, 'dientichpl') ?>

    <?php // echo $form->field($model, 'maloaidat') ?>

    <?php // echo $form->field($model, 'khloaidat') ?>

    <?php // echo $form->field($model, 'diadanh') ?>

    <?php // echo $form->field($model, 'dtsd') ?>

    <?php // echo $form->field($model, 'tenchu') ?>

    <?php // echo $form->field($model, 'diachi') ?>

    <?php // echo $form->field($model, 'mdsd2003') ?>

    <?php // echo $form->field($model, 'kh2003') ?>

    <?php // echo $form->field($model, 'mscolor') ?>

    <?php // echo $form->field($model, 'shthuatam') ?>

    <?php // echo $form->field($model, 'dtthocu') ?>

    <?php // echo $form->field($model, 'dacapgcn') ?>

    <?php // echo $form->field($model, 'geom') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
