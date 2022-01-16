<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SoNganh */

$this->title = 'Cập nhật: ' . $model->ten;
$this->params['breadcrumbs'][] = ['label' => 'So Nganhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->so_id, 'url' => ['view', 'id' => $model->so_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="so-nganh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
