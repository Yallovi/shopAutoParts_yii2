<div class="main">
    <div class="container">
        <div class="row">

            <?php

            /* @var $this yii\web\View */
            /* @var $form yii\bootstrap\ActiveForm */
            /* @var $model app\models\LoginForm */

            use yii\helpers\Html;
            use yii\bootstrap\ActiveForm;

            $this->title = 'Вход в админку';
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <!doctype html>
            <html lang="<?= Yii::$app->language ?>">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">

            </head>
            <body>
            <div style="margin-top: 100px" class="site-login">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>Пожалуйста введите логин и пароль</p>

                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                ]); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Логин') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>

                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ])->label('Запомнить меня ') ?>

                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>

                <!--    <div class="col-lg-offset-1" style="color:#999;">-->
                <!--        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>-->
                <!--        To modify the username/password, please check out the code <code>app\models\User::$users</code>.-->
                <!--    </div>-->
            </div>

            </body>
            </html>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.main -->



