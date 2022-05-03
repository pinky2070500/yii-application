<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Ranhthua */

$this->title = $model->gid;
$this->params['breadcrumbs'][] = ['label' => 'Ranhthuas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ranhthua-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->gid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->gid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'gid',
            'id',
            'thuaid',
            'xaid',
            'shbando',
            'shthua',
            'dientich',
            'dientichpl',
            'maloaidat',
            'khloaidat',
            'diadanh',
            'dtsd',
            'tenchu',
            'diachi',
            'mdsd2003',
            'kh2003',
            'mscolor',
            'shthuatam',
            'dtthocu',
            'dacapgcn',
//            'geom',
        ],
    ]) ?>

</div>
