<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SoNganh */

$this->title = 'Create So Nganh';
$this->params['breadcrumbs'][] = ['label' => 'So Nganhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="so-nganh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
