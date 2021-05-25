<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Список',
                'url' => ['#'],
                'options'=>['class'=>'dropdown'],
                'template' => '<a href="{url}" class="url-class">{label}</a>',
                'items' =>[
                    ['label' => 'Информация', 'url' => ['/shop/info']],
                    ['label' => 'Админка', 'url' => ['site/admin']],
                    ['label' => 'Запрос 1', 'url' => ['/shop/zaprosone']],
                    ['label' => 'Запрос 2', 'url' => ['/shop/requesttwo']],
                    ['label' => 'Запрос 3', 'url' => ['/shop/zaprosthree']],
                    ['label' => 'Запрос 4', 'url' => ['/shop/zaprosfour']],
                    ['label' => 'Запрос 5', 'url' => ['/shop/zaprosfive']],
                    ['label' => 'Запрос 6', 'url' => ['/shop/lab']],
                    ['label' => 'Запрос 7', 'url' => ['/shop/zaprosseven']],
                    ['label' => 'Запрос 8', 'url' => ['/shop/zaproseight']],
                    ['label' => 'Запрос 9', 'url' => ['/shop/zaprosnine']],
                    ['label' => 'Запрос 10', 'url' => ['/shop/zaprosten']],
                    ['label' => 'Запрос 11', 'url' => ['/shop/zaproseleven']],
                    ['label' => 'Запрос 12', 'url' => ['/shop/zaprostwelve']],
                    ['label' => 'Запрос 13', 'url' => ['/shop/zaprosthirteen']],
                    ['label' => 'Запрос 14', 'url' => ['/shop/zaprosfourteen']],
                    ['label' => 'Запрос 15', 'url' => ['/shop/zaprosfifteen']],
                    ['label' => 'Запрос 16', 'url' => ['/shop/zaprossixteen']],
                ]
            ],
            Yii::$app->user->isGuest ? (
                ['label' => 'Авторизация', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')

                . Html::submitButton(
                    'Выйти из (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ),
            ['label' => 'Регистрация', 'url' => ['/site/signup']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
