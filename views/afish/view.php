<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'masters59 | Предварительный просмотр';
?>
<section class="latest-news blog blog-single padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="">
                <div class="text-center">
                    <h2><?= $afish->name; ?></h2>
                </div>
                <?php if (Yii::$app->session->getFlash('afish')): ?>
                    <div class="alert alert-success" role="alert" style="margin-bottom: 50px;">
                        <?= Yii::$app->session->getFlash('afish'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="afish view">
                <article class="margin-bottom-50">
                    <div class="news-detail">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <div class="avatar"><img width="100px" src="<?= $afish->getImage(); ?>"
                                                         alt=""></div>
                                <p></p>
                                <p><i class="fa fa-eye"></i><?= (int)$afish->viewed ?></p>


                            </div>
                            <div class="col-md-9"><h5 class="font-alegreya"><?= $afish->name ?></h5>
                                <p><?= $afish->description ?></p>
                                <p><?= $afish->content ?></p>
                                <h6><i class="fa fa-phone"></i><?= $afish->phone ?></li></h6>
                            </div>
                        </div>
                        <div class="afish-action">
                            <a href="<?= Url::toRoute(['set-image', 'id' => $afish->id]); ?>"><i class="fa-solid fa-arrow-up-from-bracket"></i>Загрузка обложки</a>
                            <a href="<?= Url::toRoute(['update', 'id' => $afish->id]); ?>"><i class="fa-solid fa-file-pen"></i>Редактировать</a>
                            <?= Html::a('<i class="fa-solid fa-trash-can"></i> Удалить', ['delete', 'id' => $afish->id], [
                                'data' => [
                                    'confirm' => 'Вы действительно хотите удалить?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </div>
                    </div>
                </article>
            </div>

            <a href="/afish/main" class="btn btn-orange">Назад</a>

        </div>
    </div>
</section>
