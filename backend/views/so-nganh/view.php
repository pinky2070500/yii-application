<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SoNganh */

$this->title = $model->so_id;
$this->params['breadcrumbs'][] = ['label' => 'So Nganhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="so-nganh-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->so_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->so_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có muốn xóa cái này?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'so_id',
            'diachi:ntext',
            'dienthoai:ntext',
            'website:ntext',
            'fax:ntext',
            'ten:ntext',
            'geom',
        ],
    ]) ?>

</div>
