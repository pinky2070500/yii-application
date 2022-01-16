<?php

/* @var $this View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\web\View;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap h-100 d-flex flex-column">
    <?php echo $this->render('_header') ?>
    <main class="d-flex" style="flex: 1">
        <?php echo $this->render('_sidebar') ?>

        <div class="content-wrapper p-3" style="flex: 1">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
