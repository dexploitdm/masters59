<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div id="content">
    <section class="contact-us padding-top-100 padding-bottom-100">
        <?php if (Yii::$app->session->getFlash('contactFormSubmitted')): ?>
            <div class="alert alert-success" role="alert" style="margin-bottom: 50px;">
                <?= Yii::$app->session->getFlash('contactFormSubmitted'); ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="text-center">
                <h3 class="font-normal text-uppercase font-alegreya">yes</h3>
                <img class="img-responsive margin-top-80" src="/masters/images/404-number.png" alt="" > <br>
                <a href="/site/index/" class="btn btn-orange margin-top-100">Назад на главную</a> </div>
        </div>
    </section>
</div>