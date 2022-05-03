<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ranhthua */

$this->title = 'Create Ranhthua';
$this->params['breadcrumbs'][] = ['label' => 'Ranhthuas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ranhthua-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
