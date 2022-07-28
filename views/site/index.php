<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Masters59';
?>

<section class="home-slider">
    <div class="swiper slider-home">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url(<?php echo Yii::getAlias('@appTheme');   ?>/images/slides/slide-bg-1.jpg);">
                <div class="container slider-box">
                    <div class="slider-content">
                        <h1><?php foreach($info as $banner):?><?= $banner->title1; ?><?php endforeach; ?></h1>
                        <div class="slider-content_text"><?php foreach($info as $banner):?><?= $banner->text1; ?><?php endforeach; ?></div>

                        <a class="btn" href="#">Заказать звонок</a>
                    </div>
                    <div class="slider-cover">
                        <img src="<?php echo Yii::getAlias('@appTheme');   ?>/images/slides/img--1-3.png" alt="" >
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url(<?php echo Yii::getAlias('@appTheme');   ?>/images/slides/slide-bg-2.jpg);">
                <div class="container slider-box">
                    <div class="slider-content slider-content_t1">
                        <h2><?php foreach($info as $banner):?><?= $banner->title2; ?><?php endforeach; ?></h2>
                        <div class="slider-content_text"><?php foreach($info as $banner):?><?= $banner->text2; ?><?php endforeach; ?></div>

                        <a class="btn" href="#">Заказать звонок</a>
                    </div>
                    <div class="slider-cover">
                        <img src="<?php echo Yii::getAlias('@appTheme');   ?>/images/slides/img--2-3.png" alt="" >
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
                <div class="col-md-6"> <img class="img-responsive margin-top-30" src="<?php echo Yii::getAlias('@appTheme');   ?>/images/banners/banner2.png" alt=" "> </div>
                <div class="col-md-6">
                    <div class="heading-block text-left margin-bottom-20">
                        <h2>У нас выгодно заказывать услуги!</h2>
                        <?php foreach($info as $banner):?>
                            <p><?= $banner->description; ?></p>
                        <?php endforeach; ?>
                    </div>
                    <ul class="list-style">
                        <li>
                            <p><img src="<?php echo Yii::getAlias('@appTheme');   ?>/images/list-icon-1.png" alt=""> Безопасность и гарантии </p>
                        </li>
                        <li>
                            <p><img src="<?php echo Yii::getAlias('@appTheme');   ?>/images/list-icon-2.png" alt=""> Сервис является бесплатным </p>
                        </li>
                        <li>
                            <p><img src="<?php echo Yii::getAlias('@appTheme');   ?>/images/list-icon-3.png" alt="">  Исполнители сервиса проходят верификацию и имеют подтвержденные данные </p>
                        </li>
                    </ul>
                    <a href="#." class="btn margin-top-20">Learn More</a> <a href="#." class="btn btn-orange margin-left-30 margin-top-20">Get a quote</a> </div>
            </div>
        </div>
    </section>
    <section class="case-studies padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="case">
                <div class="heading-block text-center margin-bottom-80">
                    <h2>Лучшие исполнители </h2>
                    <span class="intro-style">Choose from affordable SEO services packages & get the best results in return. </span> </div>
                <ul class="row">
<?php foreach($best as $afish):?>
                    <li class="col-md-4">
                        <article> <a href="#"> <img class="img-responsive" src="<?= $afish->getImage(); ?>" alt=""> </a>
                            <div class="case-detail">
                                <h5><?= $afish->name; ?> </h5>/ <span><a href="<?= Url::toRoute(['site/catalog', 'id'=>$afish->catalog->id]);?>">
<?= $afish->catalog->title; ?></a></span>
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
