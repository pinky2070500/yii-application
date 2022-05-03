<?php

use yii\bootstrap4\LinkPager;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sở Ban ngành';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="so-nganh-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    <form action="<?php echo Url::to(['so-nganh/search'])?>" class="d-flex">
        <input class="form-control" type="search" placeholder="Search"
                    name="keyword">
        <button class="btn btn-outline-success">Search</button>
    </form>
    </p>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'pager'=>[
                'class'=> LinkPager::class,
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'so_id',
            'ten:ntext',
            'diachi:ntext',
            'dienthoai:ntext',
            'website:ntext',
            'fax:ntext',
            //'geom',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
