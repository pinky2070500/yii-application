<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ranhthua */

$this->title = 'Update Ranhthua: ' . $model->gid;
$this->params['breadcrumbs'][] = ['label' => 'Ranhthuas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gid, 'url' => ['view', 'id' => $model->gid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ranhthua-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
