<?php
use app\models\Comment;
use yii\helpers\Url;
$this->title = 'Masters59 | ' .$afish->name;
?>
<section class="latest-news blog blog-single single-cat">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <article class="margin-bottom-50">
                    <img class="img-responsive"src="<?= $afish->getImage();?>" alt="">
                    <div class="news-detail">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <h6><i class="fa fa-phone"></i><?= $afish->phone ?></li></h6>
                                <p><i class="fa fa-eye"></i><?= (int) $afish->viewed?></p>
                            </div>
                            <div class="col-md-9"><h4><?= $afish->name ?></h4>
                                <p><?= $afish->description ?></p>
                                <div class="row margin-top-30 margin-bottom-30">
                                    <p><?= $afish->content ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="comments">
                    <?php if(!empty($comments)): ?>
                        <?php foreach($comments as $comment ): ?>
                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left"> <a href="#"> <img class="media-object"src="<?= $comment->user->image;?>" alt=""> </a> </div>
                                    <div class="media-body light-gray-bg">
                                        <h6 class="media-heading"><?= $comment->user->name; ?><span><?= $comment->getDate();?></span></h6>
                                        <p><?= $comment->text; ?>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if(!Yii::$app->user->isGuest):?>
                        <div class="leave-comment">
                            <h4>Коментарий</h4>
                            <?php if(Yii::$app->session->getFlash('comment')):?>
                                <div class="alert alert-success" role="alert">
                                    <?= Yii::$app->session->getFlash('comment'); ?>
                                </div>
                            <?php endif;?>
                            <?php $form = \yii\widgets\ActiveForm::begin([
                                'action'=>['site/comment','id'=>$afish->id],
                                'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']])?>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <?= $form->field($commentForm, 'comment')->textarea(['class'=>'form-control','placeholder'=>'Написать коментарий'])->label(false)?>
                                </div>
                            </div>
                            <button type="submit" class="btn send-btn">Отправить</button>
                            <?php \yii\widgets\ActiveForm::end();?>
                        </div>
                    <?php endif; ?>
                </div>

            </div>

            <div class="col-md-3">
                <div class="side-bar">
                    <h5 class="font-alegreya ">Каталоги услуг</h5>
                    <ul class="cate bg-defult">
                        <?= \app\components\MenuWidget::widget(['tpl'=>'menu'])?>
                    </ul>
                    <h5 class="font-alegreya">Популярные Специалисты</h5>
                    <div class="papu-post margin-t-40">
                        <ul class="bg-defult">
                            <?php foreach($popular as $afish): ?>
                            <li class="media">
                                <div class="media-left"> <a href="<?= Url::toRoute(['site/view', 'id'=>$afish->id]);?>">
                                        <img class="media-object"src="<?= $afish->getImage(); ?>" alt=""></a>
                                </div>
                                <div class="media-body"><a href=""><b><?= $afish->name; ?></b><br></a>
                                    <p class="media-heading" href="#."><?= $afish->description; ?></p> <span><?= $afish->getDate(); ?></span>
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