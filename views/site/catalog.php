<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->params['breadcrumbs'][] = $this->title;
$catalog = '';
$catalogID = '';
?>
<?php foreach ($afishes as $afish): ?>
    <?php $catalog = $afish->catalog->title ?>  </h2>
    <?php $catalogID = $afish->catalog->id ?>  </h2>
<?php endforeach; ?>
<?php $this->title = 'Masters59 | ' .$catalog; ?>
<!--======= SUB BANNER =========-->
<section class="sub-banner d<?php echo $catalogID; ?>">
    <div class="container">
        <div class="position-center-center">
            <h2><?php echo $catalog; ?></h2>
        </div>
    </div>
</section>

<div id="content">
    <section class="latest-news blog padding-top-100 cat">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php foreach ($afishes as $afish): ?>
                        <article class="margin-bottom-50">
                            <div class="a-box">
                                <div class="a-box-m">
                                    <div class="a-box-cover">
                                        <img width="300px" src="<?= $afish->getImage(); ?>" alt="">
                                    </div>
                                    <div class="a-box-view">
                                        <div><i class="fa fa-eye"></i><div><?= (int)$afish->viewed ?></div></div>
                                        <div><i class="fa fa-comment"></i><div><?= $afish->getCountComments(); ?></div></div>
                                    </div>
                                </div>
                                <div class="a-box-info">
                                    <h5 class="font-alegreya"><a
                                                href="<?= Url::toRoute(['site/view', 'id' => $afish->id]); ?>"><?= $afish->name ?></a>
                                    </h5>
                                    <p><?= $afish->description ?></p>
                                    <div class="a-box-info_bottom">
                                        <h6><i class="fa fa-phone"></i><?= $afish->phone ?></li></h6>
                                        <a href="<?= Url::toRoute(['site/view', 'id' => $afish->id]); ?>"
                                           class="btn btn-orange"><i class="fa fa-book"></i> Посмотреть</a>
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
                            <?= \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
                        </ul>
                        <h5 class="font-alegreya">Популярные исполнители</h5>
                        <div class="papu-post margin-t-40">
                            <ul class="bg-defult">
                                <?php foreach ($popular as $afish): ?>
                                    <li class="media">
                                        <div class="media-left"><a
                                                    href="<?= Url::toRoute(['site/view', 'id' => $afish->id]); ?>">
                                                <img class="media-object" src="<?= $afish->getImage(); ?>" alt=""></a>
                                        </div>
                                        <div class="media-body"><p><b><?= $afish->name; ?></b><br></p>
                                            <p class="media-heading"><?= $afish->description; ?></p>
                                            <span><?= $afish->getDate(); ?></span>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <h5 class="font-alegreya">Последние афиши</h5>
                        <div class="papu-post margin-t-40">
                            <ul class="bg-defult">
                                <?php foreach ($recent as $afish): ?>
                                    <li class="media">
                                        <div class="media-left"><a
                                                    href="<?= Url::toRoute(['site/view', 'id' => $afish->id]); ?>">
                                                <img class="media-object" src="<?= $afish->getImage(); ?>" alt=""></a>
                                        </div>
                                        <div class="media-body"><a class="media-heading"
                                                                   href="<?= Url::toRoute(['site/view', 'id' => $afish->id]); ?>">
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
