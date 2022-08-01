<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'Каталоги';
$this->params['breadcrumbs'][] = $this->title;
$catalog = '';
$catalogID = '';
?>
<?php foreach($afishes as $afish):?>
    <?php $catalog = $afish->catalog->title ?>  </h2>
    <?php $catalogID = $afish->catalog->id ?>  </h2>
<?php endforeach; ?>
<!--======= SUB BANNER =========-->
<section class="sub-banner d<?php echo $catalogID; ?>">
    <div class="container">
        <div class="position-center-center">
            <h2><?php echo $catalog; ?></h2>
        </div>
    </div>
</section>

<div id="content">
    <section class="latest-news blog padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                   <?php foreach($afishes as $afish):?>
                    <article class="margin-bottom-50"> <a href="#"> </a>
                        <div class="news-detail">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <div class="avatar"> <img width="100px" src="<?= $afish->getImage(); ?>" alt=""> </div>
                                    <p></p>
                                    <p><i class="fa fa-eye"></i><?= (int) $afish->viewed?></p>
                                    <p><i class="fa fa-comment"></i>  <?= $afish->getCountComments();  ?>  </p>
                                    <h6><i class="fa fa-phone"></i><?= $afish->phone ?></li></h6>
                                    <a href="<?= Url::toRoute(['site/view', 'id'=>$afish->id]);?>" class="btn btn-orange"><i class="fa fa-book"></i>Посмотреть профиль</a>
                                </div>
                                <div class="col-md-9"> <h5 class="font-alegreya"><a href="#"><?= $afish->name?></a></h5>
                                    <p><?= $afish->description ?></p>
                                </div>

                            </div>
                        </div>
                    </article>
                    <?php endforeach; ?>
                    <?php
                    echo LinkPager::widget([
                        'pagination' => $pagination,
                    ]);
                    ?>
                </div>
                <div class="col-md-3">
                    <div class="side-bar">
                        <h5 class="font-alegreya ">Каталоги услуг</h5>
                        <ul class="cate bg-defult">
                            <?= \app\components\MenuWidget::widget(['tpl'=>'menu'])?>
                        </ul>
                        <h5 class="font-alegreya">Популярные исполнители</h5>
                        <div class="papu-post margin-t-40">
                            <ul class="bg-defult">
                                <?php foreach($popular as $afish): ?>
                                <li class="media">
                                    <div class="media-left"> <a href="<?= Url::toRoute(['site/view', 'id'=>$afish->id]);?>">
                                            <img class="media-object" src="<?= $afish->getImage(); ?>" alt=""></a>
                                    </div>
                                    <div class="media-body"><p><b><?= $afish->name; ?></b><br></p> <p class="media-heading"><?= $afish->description; ?></p>
                                        <span><?= $afish->getDate(); ?></span>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <h5 class="font-alegreya">Последние афиши</h5>
                        <div class="papu-post margin-t-40">
                            <ul class="bg-defult">
                                <?php foreach($recent as $afish):  ?>
                                <li class="media">
                                    <div class="media-left"> <a href="<?= Url::toRoute(['site/view', 'id'=>$afish->id]);?>">
                                            <img class="media-object" src="<?= $afish->getImage(); ?>" alt=""></a>
                                    </div>
                                    <div class="media-body"> <a class="media-heading" href="<?= Url::toRoute(['site/view', 'id'=>$afish->id]);?>">
                                            <?= $afish->description; ?></a> <span><?= $afish->getDate(); ?></span>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
