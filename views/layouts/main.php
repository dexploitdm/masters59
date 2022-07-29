<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
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
                <div class="logo"> <a href="/"><img src="<?php echo Yii::getAlias('@appTheme');   ?>/images/banners/5.png" alt=""></a></div>

                <!-- Nav -->
                <nav>
                    <ul id="ownmenu" class="ownmenu">
                        <li><a href="/">Главная</a></li>
                        <li><a href="#">Каталог услуг</a>
                            <ul class="dropdown">
                                <?= \app\components\MenuWidget::widget(['tpl'=>'menu'])?>
                            </ul>
                        </li>
                        <li><a href="/site/about/">О компании</a></li>
                        <li><a href="/site/contact/"> Контакты </a></li>
                        <li><a href="/site/login">Профиль</a>
                            <ul class="dropdown">
                                <?php if(Yii::$app->user->isGuest): ?>
                                <li class="menu-item menu-item-has-children"><a href="<?= Url::toRoute(['auth/login']) ?>">Вход</a>
                                <li class="menu-item menu-item-has-children"><a href="<?= Url::toRoute(['auth/signup']) ?>">Регистрация</a>
                                    <?php else: ?>
                                <li class="menu-item menu-item-has-children"><a href="<?= Url::toRoute(['/afish/main']) ?>">Мои</a>
                                <li class="menu-item menu-item-has-children"><a href="<?= Url::toRoute(['/afish/index']) ?>">Добавить</a>
                                <li class="menu-item menu-item-has-children"><a href="<?= Url::toRoute(['/auth/logout']) ?>">Выход(<?= Yii::$app->user->identity->name ?>)</a>
                                    <?php endif; ?>
                            </ul>
                        </li>
                        <!--======= SEARCH ICON =========-->
<!--                        <li class="search-nav right"><a href="#."><i class="fa fa-search"></i></a>-->
<!--                            <ul class="dropdown">-->
<!--                                <li>-->
<!--                                    <form>-->
<!--                                        <input type="search" class="form-control" placeholder="Enter Your Keywords..." required>-->
<!--                                        <button type="submit"> SEARCH </button>-->
<!--                                    </form>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
                    </ul>
                </nav>
            </div>
        </div>
    </header>

<main><?= $content ?></main>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 padding-top-50">

                    <div class="news-letter">
                        <h6>News Letter</h6>
                        <form>
                            <input type="email" placeholder="Enter your email..." >
                            <button type="submit"><i class="fa fa-envelope-o"></i></button>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 padding-top-50">
                    <div class="news-letter">
                        <h6>Follow us</h6>
                        <ul class="social_icons pull-left margin-left-50 margin-top-10">
                            <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#."><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#."><i class="fa fa-skype"></i></a></li>
                            <li><a href="#."><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-info">
            <div class="container">
                <div class="row">

                    <div class="col-md-4"> <img class="margin-bottom-30" src="<?php echo Yii::getAlias('@appTheme');   ?>/images/logo-footer.png" alt="" >
                        <p>Aoluptas sit aspernatur aut odit aut fugit, sed elits quias consequuntur magni dolores eos qui ratione volust  luptatem sequi nesciunt. .</p>
                        <ul class="personal-info">
                            <li><i class="fa fa-map-marker"></i> 10th Floor,Washington Square Park,
                                NY, United States.</li>
                            <li><i class="fa fa-envelope"></i> Support@domain.com</li>
                            <li><i class="fa fa-phone"></i> (004)+ 124 45 78 678 </li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h6>Service provided</h6>
                        <ul class="links">
                            <li><a href="#.">SEO Services</a></li>
                            <li><a href="#.">Pay per click</a></li>
                            <li><a href="#.">Social Media</a></li>
                            <li><a href="#.">Web Analytics</a></li>
                            <li><a href="#.">Web Developement</a></li>
                            <li><a href="#.">Content Management</a></li>
                            <li><a href="#.">Blog Management</a></li>
                            <li><a href="#.">Virtual Marketing</a></li>
                            <li><a href="#.">Email Marketing</a></li>
                            <li><a href="#.">Keyword Analytics</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h6>Get Free Quote</h6>
                        <div class="quote">
                            <form>
                                <input class="form-control" type="text" placeholder="Name">
                                <input class="form-control" type="text" placeholder="Phone No">
                                <textarea class="form-control" placeholder="Messages"></textarea>
                                <button type="submit" class="btn btn-orange">SEND NOW</button>
                            </form>
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
