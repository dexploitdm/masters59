<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Добавить объявление';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="afish-block">
    <div class="afish-form">
        <div>
            <h2>Добавьте свое объявление</h2>
        </div>

        <?php if(Yii::$app->session->getFlash('afish')):?>
            <div class="alert alert-success" role="alert">
                <?= Yii::$app->session->getFlash('afish'); ?>
            </div>
        <?php endif;?>


        <?= $this->render('_form', [
            'model' => $model,
            'cataloges' => $cataloges
        ]) ?>
    </div>
</section>