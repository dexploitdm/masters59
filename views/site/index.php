<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Masters59 | Главная';
?>

<section class="home-slider">
    <div class="swiper slider-home">
        <div class="swiper-wrapper">
            <div class="swiper-slide"
                 style="background-image: url(<?php echo Yii::getAlias('@appTheme'); ?>/images/slides/slide-bg-1.jpg);">
                <div class="container slider-box">
                    <div class="slider-content">
                        <h1><?php foreach ($info as $banner): ?><?= $banner->title1; ?><?php endforeach; ?></h1>
                        <div class="slider-content_text"><?php foreach ($info as $banner): ?><?= $banner->text1; ?><?php endforeach; ?></div>
                        <?php if (Yii::$app->user->isGuest): ?>
                            <a class="btn" href="<?= Url::toRoute(['auth/login']) ?>">Вход</a>
                        <?php else: ?>
                            <a class="btn" href="<?= Url::toRoute(['/afish/index']) ?>">Добавить услугу</a>
                        <?php endif; ?>
                    </div>
                    <div class="slider-cover">
                        <img src="<?php echo Yii::getAlias('@appTheme'); ?>/images/slides/img--1-3.png" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-slide"
                 style="background-image: url(<?php echo Yii::getAlias('@appTheme'); ?>/images/slides/slide-bg-2.jpg);">
                <div class="container slider-box">
                    <div class="slider-content slider-content_t1">
                        <h2><?php foreach ($info as $banner): ?><?= $banner->title2; ?><?php endforeach; ?></h2>
                        <div class="slider-content_text"><?php foreach ($info as $banner): ?><?= $banner->text2; ?><?php endforeach; ?></div>

                        <a class="btn" href="#">Заказать звонок</a>
                    </div>
                    <div class="slider-cover">
                        <img src="<?php echo Yii::getAlias('@appTheme'); ?>/images/slides/img--2-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<div id="content">
    <section class="front-page padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><img class="img-responsive margin-top-30"
                                           src="<?php echo Yii::getAlias('@appTheme'); ?>/images/banners/banner2.png"
                                           alt=" "></div>
                <div class="col-md-6">
                    <div class="heading-block text-left margin-bottom-20">
                        <h2>У нас выгодно заказывать услуги!</h2>
                        <?php foreach ($info as $banner): ?>
                            <p><?= $banner->description; ?></p>
                        <?php endforeach; ?>
                    </div>
                    <ul class="list-style">
                        <li>
                            <p><img src="<?php echo Yii::getAlias('@appTheme'); ?>/images/list-icon-1.png" alt="">
                                Безопасность и гарантии </p>
                        </li>
                        <li>
                            <p><img src="<?php echo Yii::getAlias('@appTheme'); ?>/images/list-icon-2.png" alt="">
                                Сервис является бесплатным </p>
                        </li>
                        <li>
                            <p><img src="<?php echo Yii::getAlias('@appTheme'); ?>/images/list-icon-3.png" alt="">
                                Исполнители сервиса проходят верификацию и имеют подтвержденные данные </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="case-studies">
        <div class="container">
            <div class="case">
                <div class="heading-block text-center margin-bottom-50">
                    <h2>Лучшие мастера</h2>
                    <span class="intro-style">Почетная наша доска лучших публикаций</span></div>
                    <ul class="row">
                        <?php foreach ($best as $afish): ?>
                            <li class="col-md-4">
                                <article>
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $afish->id]); ?>">
                                        <div class="d-best-cover" style="  background-image: url(<?= $afish->getImage(); ?>);"></div>
                                    </a>
                                    <div class="case-detail">
                                        <h5><?= $afish->name; ?> </h5>/
                                        <span>
                                            <a href="<?= Url::toRoute(['site/catalog', 'id' => $afish->catalog->id]); ?>">
                                                <?= $afish->catalog->title; ?>
                                            </a>
                                        </span>
                                        <p><?= $afish->description; ?></p>
                                    </div>
                                </article>
                            </li>
                        <?php endforeach; ?>
                    </ul>

            </div>
        </div>
    </section>
</div>
