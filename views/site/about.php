<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Masters59 | О компании';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="sub-banner d1">
    <div class="container">
        <div class="position-center-center">
            <h2>Сервис услуг Перми</h2>
        </div>
    </div>
</section>
<section class="d-block">
    <div>
        <p>Мы создали удобную площадку, где Вы в краткий срок можете найти исполнителя для заданий, которые Вы не
            можете или не желаете выполнить сами.
            образом, с одной стороны мы освобождаем Вас от ненужных хлопот, а с другой - даем другим людям
            возможность заработать.</p>
    </div>
    <div>
        <h3>Отзывы о нашем сервисе </h3>
    </div>
    <div class="comments">
        <?php if (!empty($zovs)): ?>
            <?php foreach ($zovs as $zov): ?>
                <ul class="media-list">
                    <li class="media">
                        <div class="media-left"><a href="#"> <img class="media-object"
                                                                  src="/<?= $zov->user->image; ?>" alt=""> </a>
                        </div>
                        <div class="media-body light-gray-bg">
                            <h6 class="media-heading"><?= $zov->user->name; ?>
                                <span><?= $zov->getDate(); ?></span></h6>
                            <p><?= $zov->text; ?></p>
                        </div>
                    </li>
                </ul>
            <?php endforeach; ?>
        <?php endif; ?>

        <?php if (!Yii::$app->user->isGuest): ?>
            <div class="leave-comment">
                <h4>Написать отзыв</h4>
                <?php if (Yii::$app->session->getFlash('zovs')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= Yii::$app->session->getFlash('zovs'); ?>
                    </div>
                <?php endif; ?>


                <?php $form = \yii\widgets\ActiveForm::begin([
                    'action' => ['site/zovs'],
                    'options' => ['class' => 'form-horizontal contact-form', 'role' => 'form']]) ?>
                <div class="form-group">
                    <div class="col-md-12">
                        <?= $form->field($zovsForm, 'zovs')->textarea(['class' => 'form-control', 'placeholder' => 'Написать сообщение'])->label(false) ?>
                    </div>
                </div>
                <button type="submit" class="btn send-btn">Отправить</button>
                <?php \yii\widgets\ActiveForm::end(); ?>
            </div>
        <?php else : ?>
            <div class="alert alert-success">
                <h6>Добавить отзыв могут только авторизованные пользователи</h6>
            </div>
        <?php endif; ?>

    </div>
</section>