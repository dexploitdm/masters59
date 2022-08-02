<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\components\FBFWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use app\assets\MastersAsset;

MastersAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#222935">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>
<header class="header coporate-header">
    <div class="header-info">
        <div class="container">
            <div class="row">
                <div class="col-md-2 noo-res"></div>
                <div class="col-md-10">
                    <div class="top-bar">
                        <div class="col-md-3">
                            <ul class="social_icons">
                                <li><a href="#."><i class="fa fa-vk"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <ul class="some-info font-montserrat">
                                <li><i class="fa fa-phone"></i>8 (999) 999 99 99</li>
                                <li><i class="fa fa-envelope"></i> masters59@mail.ru</li>
                                <li><i class="fa fa-location-arrow"></i>г.Пермь Чернышевского, 22</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky">
        <div class="container">
            <div class="logo"><a href="/"><img src="<?php echo Yii::getAlias('@appTheme'); ?>/images/banners/5.png" alt=""></a></div>

            <!-- Nav -->
            <nav>
                <ul id="ownmenu" class="ownmenu">
                    <li><a href="/">Главная</a></li>
                    <li><a href="#">Каталог услуг</a>
                        <ul class="dropdown">
                            <?= \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
                        </ul>
                    </li>
                    <li><a href="/site/about/">О нас</a></li>
                    <li><a href="#"><span><i class="fa-solid fa-user"></i></span></a>
                        <ul class="dropdown auth">
                            <?php if (Yii::$app->user->isGuest): ?>
                                <li class="menu-item menu-item-has-children"><a
                                            href="<?= Url::toRoute(['auth/login']) ?>">Вход</a></li>
                                <li class="menu-item menu-item-has-children"><a
                                            href="<?= Url::toRoute(['auth/signup']) ?>">Регистрация</a></li>
                            <?php else: ?>
                                <li class="menu-item menu-item-has-children"><a
                                            href="<?= Url::toRoute(['/afish/main']) ?>">Мои публикации</a></li>
                                <li class="menu-item menu-item-has-children"><a
                                            href="<?= Url::toRoute(['/afish/index']) ?>">Добавить</a></li>
                                <li class="menu-item menu-item-has-children"><a
                                            href="<?= Url::toRoute(['/auth/logout']) ?>">Выход(<?= Yii::$app->user->identity->name ?>
                                        )</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </nav>



        </div>
    </div>
</header>

<main><?= $content ?></main>

<footer>
    <div class="footer-info">
        <div class="container">
            <div class="row">

                <div class="col-md-4"><img class="margin-bottom-30 footer-logo"
                                           src="<?php echo Yii::getAlias('@appTheme'); ?>/images/banners/5.png" alt="">
                    <p>Наш сервис помогает заказчикам и исполнителям удобно найти друг друга и начать сотрудничество.</p>
                    <ul class="personal-info">
                        <li><i class="fa fa-map-marker"></i>г.Пермь Чернышевского, 22
                        </li>
                        <li><i class="fa fa-envelope"></i><a href = "mailto:masters59@mail.ru">masters59@mail.ru</a></li>
                        <li><i class="fa fa-phone"></i><a href="tel:89999999999">8 (999) 999 99 99 </a></li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h6>Каталог услуг</h6>
                    <ul class="links">
                        <?= \app\components\MenuWidget::widget(['tpl'=>'menu'])?>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6>Обратная связь</h6>

                    <div class="quote">
                        <?= FBFWidget::widget([]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rights">
        <div class="container">
            <p>Copyright © <?php echo date("Y"); ?> Masters59</p>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
