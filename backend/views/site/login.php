<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */

/* @var $model LoginForm */

use common\models\LoginForm;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
?>
<div class="row">
    <div class="col-lg-6 d-none d-lg-block">
        <img src="https://3.bp.blogspot.com/-RS7OW1OpLpI/WldauCwFBvI/AAAAAAAAEIk/wRb7hVxiKRssXaO4JoElJuXy1yNjf2K6QCEwYBhgL/s1600/th%25C3%25A0nh%2Bph%25E1%25BB%2591%2BHu%25E1%25BA%25BF.png" alt="" width="500" height="600">
    </div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'user']
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <?= Html::submitButton('Login',
                ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>

            <?php ActiveForm::end(); ?>
            <hr>
            <div class="text-center">
                <a class="small" href="<?php echo Url::to(['/site/forgot-password']) ?>">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
