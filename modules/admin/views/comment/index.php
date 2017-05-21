<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CatalogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Коментарии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalog-index">
    <?php if(!empty($comments)): ?>
        <table class="table">
            <thead>
            <tr>
                <td>№</td>
                <td>Афиша</td>
                <td>Автор</td>
                <td>Коментарий</td>
                <td>Действия</td>

            </tr>
            </thead>
            <tbody>
            <?php foreach($comments as $comment): ?>
                <tr>
                    <td><?= $comment->id ?></td>
                    <td><?= $comment->afish->name ?></td>
                    <td><?= $comment->user->name ?></td>
                    <td><?= $comment->text ?></td>
                    <td>
                        <?php if($comment->isAllowed()):?>
                            <a class="btn btn-warning" href="<?= Url::toRoute(['comment/disallow', 'id'=>$comment->id]);?>">Запретить</a>
                        <?php else:?>
                            <a class="btn btn-success" href="<?= Url::toRoute(['comment/allow', 'id'=>$comment->id]);?>">Разрешить</a>
                        <?php endif?>
                        <a class="btn btn-danger" href="<?= Url::toRoute(['comment/delete', 'id' => $comment->id]); ?>">Удалить</a>
                    </td>
                </tr>

            <?php endforeach;?>
            </tbody>
        </table>
    <?php endif;?>

</div>
