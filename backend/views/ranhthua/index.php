<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RanhthuaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ranhthuas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ranhthua-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ranhthua', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'gid',
//            'id',
            'thuaid',
//            'xaid',
//            'shbando',
            'shthua',
//            'dientich',
            //'dientichpl',
            //'maloaidat',
            //'khloaidat',
            //'diadanh',
            //'dtsd',
            'tenchu',
            'diachi',
            //'mdsd2003',
            //'kh2003',
            //'mscolor',
            //'shthuatam',
            //'dtthocu',
            //'dacapgcn',
            //'geom',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
