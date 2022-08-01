<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Мои обьявления';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="latest-news blog blog-single padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div>
                    <h2>Ваши публикации</h2>
                </div>

                <?php if (Yii::$app->session->getFlash('afish')): ?>
                    <div class="alert alert-success" role="alert" style="margin-bottom: 50px;">
                        <?= Yii::$app->session->getFlash('afish'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="afish">
                <div class="afish-box">
                    <?php foreach ($afish as $item): ?>
                        <div class="">
                            <article class="margin-bottom-50"><a href="#"> </a>
                                <div class="news-detail">
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <div class="avatar"><img width="100px" src="<?= $item->getImage(); ?>"
                                                                     alt=""></div>
                                            <p></p>
                                            <p><i class="fa fa-eye"></i><?= (int)$item->viewed ?></p>
                                            <p><i class="fa fa-comment"></i> <?= $item->getCountComments(); ?>  </p>


                                        </div>
                                        <div class="col-md-9"><h5 class="font-alegreya"><a href="#"><?= $item->name ?></a></h5>
                                            <p><?= $item->description ?></p>
                                            <h6><i class="fa fa-phone"></i><?= $item->phone ?></li></h6>
                                        </div>
                                    </div>
                                    <div class="afish-action">
                                        <a href="<?= Url::toRoute(['afish/view', 'id' => $item->id]); ?>"><i class="fa-solid fa-file-pen"></i>Предпросмотр</a>
                                        <a href="<?= Url::toRoute(['update', 'id' => $item->id]); ?>"><i class="fa-solid fa-file-pen"></i>Редактировать</a>
                                        <?= Html::a('<i class="fa-solid fa-trash-can"></i> Удалить', ['delete', 'id' => $item->id], [
                                            'data' => [
                                                'confirm' => 'Вы действительно хотите удалить?',
                                                'method' => 'post',
                                            ],
                                        ]) ?>
                                    </div>
                                    <?php if($item->status === 1): ?>
                                        <div class="afish-status allow">
                                            <a href="<?= Url::toRoute(['site/view', 'id' => $item->id]); ?>"><i class="fa-solid fa-link"></i> Опубликован</a>
                                        </div>
                                    <?php else: ?>
                                        <div class="afish-status dis">
                                            На рассмотрении
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <a href="/afish/index" class="btn btn-orange">Добавить <i class="fa-solid fa-plus"></i></a>

        </div>
    </div>
</section>