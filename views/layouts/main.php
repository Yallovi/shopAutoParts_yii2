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
        'brandLabel' => '3DGLO',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
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

        <?= $content ?>

    <div class="footer">
        <div class="container">
            <div class="row d-flex align-items-baseline">
                <div class="col-lg-3 col-md-4 mb-3 mb-md-0">
                    <div class="footer-contacts-block"><a href="#" class="footer-link"></a><!-- /.footer-logo -->
                        <div class="footer-contacts-block__info mb-4">Дворянская ул., 1А, Владимир, Россия</div>
                        <!-- /.contacts-block__info -->
                        <div class="footer-contacts-block__info mb-4">998 99 420 00 16</div>
                        <!-- /.contacts-block__info -->
                        <div class="footer-contacts-block__info mb-4">3DGLO@rambler.kz</div>
                        <!-- /.contacts-block__info -->
                    </div><!-- /.contacts-block -->
                </div><!-- /.col-3 -->
                <div class="col-lg-2 col-md-4 mb-3 mb-md-0">
                    <div class="footer-menu"><span class="footer-menu__title">Меню</span><!-- /.footer-nemu__title -->
                        <ul class="footer-menu-navigation">
                            <li class="footer-menu-item mb-3">О нас</li><!-- /.footer-menu-link -->
                            <li class="footer-menu-item mb-3">Проекты</li><!-- /.footer-menu-link -->
                            <li class="footer-menu-item mb-3">Готовые решение</li><!-- /.footer-menu-link -->
                            <li class="footer-menu-item mb-3">Контакты</li><!-- /.footer-menu-link -->
                        </ul><!-- /.footer-menu-item -->
                    </div><!-- /.footer-menu -->
                </div><!-- /.col-2 -->
                <div class="col-lg-2 col-md-4">
                    <div class="footer-menu"><span class="footer-menu__title">Услуги</span><!-- /.footer-services -->
                        <ul class="footer-menu-navigation">
                            <li class="footer-menu-item mb-3">Все направоение архитектуры</li>
                            <!-- /.footer-services-link -->
                            <li class="footer-menu-item mb-3">Экстрьер дизайн</li><!-- /.footer-services-link -->
                            <li class="footer-menu-item mb-3">Интерьер дизайн</li><!-- /.footer-services-link -->
                            <li class="footer-menu-item mb-3">Визуализация</li><!-- /.footer-services-link -->
                        </ul><!-- /.footer-menu-item -->
                    </div><!-- /.footer-menu -->
                </div><!-- /.col-2 -->
                <div class="col-lg-5 align-self-center mt-5 mt-lg-0">
                    <div class="footer-news"><span class="footer-news__title">Новостная рассылка</span>
                        <!-- /.footer-news__title -->
                        <p class="footer-news__text">Подписайся Будь в курсу о нас, о наших новый проектов а также
                            готовых решение</p><!-- /.footer-news__text -->
                        <form action="#" class="footer-news__form d-flex justify-content-between"><input type="email"
                                                                                                         class="footer-news__form__input" placeholder="Ваша почта"> <button
                                    class="footer-news__form__button">Подписаться</button><!-- /.form-button -->
                        </form><!-- /.footer-news__form -->
                    </div><!-- /.footer-news -->
                </div><!-- /.col-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
