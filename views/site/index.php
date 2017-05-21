<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Masters59';
?>

<section class="home-slider">
    <div class="tp-banner-container">
        <div class="tp-banner-fix">
            <ul>

                <!-- Slider 1 -->
                <li data-transition="fade" data-slotamount="7"> <img src="/masters/images/slides/slide-bg-1.jpg" data-bgposition="center top" alt="" />

                    <!-- Layer -->
                    <div class="tp-caption sft tp-resizeme font-extra-bold"
                         data-x="right" data-hoffset="0"
                         data-y="center" data-voffset="0"
                         data-speed="700"
                         data-start="700"
                         data-easing="easeOutBack"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         data-captionhidden="on"> <img src="/masters/images/slides/img--1-3.png" alt="" > </div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme font-bold"
                         data-x="left" data-hoffset="40"
                         data-y="center" data-voffset="-100"
                         data-speed="500"
                         data-start="700"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-easing="Back.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         data-captionhidden="on"
                         style="color: #fff; font-size: 48px; font-weight: normal; letter-spacing:0px; line-height:55px;">
                        <?php foreach($info as $banner):?><?= $banner->title1; ?><?php endforeach; ?></div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme"
                         data-x="left" data-hoffset="40"
                         data-y="center" data-voffset="30"
                         data-speed="500"
                         data-start="1000"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-easing="Back.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         data-captionhidden="on"
                         style="color: #fff; font-size: 30px; font-weight: normal; line-height:36px;"><?php foreach($info as $banner):?><?= $banner->text1; ?><?php endforeach; ?></div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme font-crimson"
                         data-x="left" data-hoffset="40"
                         data-y="center" data-voffset="150"
                         data-speed="500"
                         data-start="1300"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-easing="Back.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         data-captionhidden="on"
                         style=""> <a href="/site/contact/" class="btn">Контакты</a></div>
                </li>

                <!-- Slider 1 -->
                <li data-transition="fade" data-slotamount="7"> <img src="/masters/images/slides/slide-bg-2.jpg" data-bgposition="center top" alt="" />

                    <!-- Layer -->
                    <div class="tp-caption sft tp-resizeme font-extra-bold"
                         data-x="right" data-hoffset="0"
                         data-y="center" data-voffset="0"
                         data-speed="700"
                         data-start="700"
                         data-easing="easeOutBack"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         data-captionhidden="on"
                    > <img src="/masters/images/slides/img--2-3.png" alt="" > </div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme font-bold"
                         data-x="left" data-hoffset="40"
                         data-y="center" data-voffset="-100"
                         data-speed="500"
                         data-start="700"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-easing="Back.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         data-captionhidden="on"
                         style="color: #fff; font-size: 48px; font-weight: normal; letter-spacing:0px; line-height:55px;">
                        <?php foreach($info as $banner):?><?= $banner->title2; ?><?php endforeach; ?> </div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme"
                         data-x="left" data-hoffset="40"
                         data-y="center" data-voffset="30"
                         data-speed="500"
                         data-start="1000"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-easing="Back.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         data-captionhidden="on"
                         style="color: #fff; font-size: 30px; font-weight: normal; line-height:36px;"><?php foreach($info as $banner):?><?= $banner->text2; ?><?php endforeach; ?></div>


                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme font-crimson"
                         data-x="left" data-hoffset="40"
                         data-y="center" data-voffset="150"
                         data-speed="500"
                         data-start="1300"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-easing="Back.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         data-captionhidden="on"
                         style="">  <a href="#." class="btn btn-white margin-left-20">Опубликовать свою услугу</a></div>
                </li>
            </ul>
        </div>
    </div>
</section>

<div id="content">

    <!-- Google Front Page -->
    <section class="front-page padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6"> <img class="img-responsive margin-top-30" src="/masters/images/banners/banner2.png" alt=" "> </div>
                <div class="col-md-6">
                    <!-- Tittle -->
                    <div class="heading-block text-left margin-bottom-20">
                        <h2>У нас выгодно заказывать услуги!</h2>
                        <?php foreach($info as $banner):?>
                        <p><?= $banner->description; ?></p>

                        <?php endforeach; ?>
                    </div>

                    <!-- List Style -->
                    <ul class="list-style">
                        <li>
                            <p><img src="/masters/images/list-icon-1.png" alt=""> Безопасность и гарантии </p>
                        </li>
                        <li>
                            <p><img src="/masters/images/list-icon-2.png" alt=""> Сервис является бесплатным </p>
                        </li>
                        <li>
                            <p><img src="/masters/images/list-icon-3.png" alt="">  Исполнители сервиса проходят верификацию и имеют подтвержденные данные </p>
                        </li>
                    </ul>

                    <!-- Buttons -->
                    <a href="#." class="btn margin-top-20">Learn More</a> <a href="#." class="btn btn-orange margin-left-30 margin-top-20">Get a quote</a> </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
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
