<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О компании';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="latest-news blog blog-single padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div>Здесь какое нибудь описание</div>
                <div class="col-md-9">
                    <div>
                        <h2>Отзывы о нашем сервисе  </h2>
                    </div>
                    <div class="comments">
                        <?php if(!empty($zovs)): ?>
                            <?php foreach($zovs as $zov ): ?>
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-left"> <a href="#"> <img class="media-object" src="/<?= $zov->user->image;?>" alt=""> </a> </div>
                                        <div class="media-body light-gray-bg">
                                            <h6 class="media-heading"><?= $zov->user->name; ?><span><?= $zov->getDate();?></span></h6>
                                            <p><?= $zov->text; ?></p>
                                        </div>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <?php if(!Yii::$app->user->isGuest):?>
                            <div class="leave-comment">
                                <h4>Написать отзыв</h4>
                                <?php if(Yii::$app->session->getFlash('zovs')):?>
                                    <div class="alert alert-success" role="alert">
                                        <?= Yii::$app->session->getFlash('zovs'); ?>
                                    </div>
                                <?php endif;?>


                                <?php $form = \yii\widgets\ActiveForm::begin([
                                    'action'=>['site/zovs'],
                                    'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']])?>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <?= $form->field($zovsForm, 'zovs')->textarea(['class'=>'form-control','placeholder'=>'Написать сообщение'])->label(false)?>
                                    </div>
                                </div>
                                <button type="submit" class="btn send-btn">Отправить</button>
                                <?php \yii\widgets\ActiveForm::end();?>
                            </div>
                        <?php else : ?>
                        <div class="alert alert-success">
                        <h6>Добавить отзыв могут только авторизованные пользователи</h6>
                    </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>