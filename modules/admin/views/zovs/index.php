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

    <?php if(!empty($zovs)): ?>
        <table class="table">
            <thead>
            <tr>
                <td>№</td>
                <td>Автор</td>
                <td>Отзыв</td>
                <td>Действия</td>

            </tr>
            </thead>
            <tbody>
            <?php foreach($zovs as $zov): ?>
                <tr>
                    <td><?= $zov->id ?></td>
                    <td><?= $zov->user->name ?></td>
                    <td><?= $zov->text ?></td>
                    <td>
                        <?php if($zov->isAllowed()):?>
                            <a class="btn btn-warning" href="<?= Url::toRoute(['zovs/disallow', 'id'=>$zov->id]);?>">Запретить</a>
                        <?php else:?>
                            <a class="btn btn-success" href="<?= Url::toRoute(['zovs/allow', 'id'=>$zov->id]);?>">Разрешить</a>
                        <?php endif?>
                        <a class="btn btn-danger" href="<?= Url::toRoute(['zovs/delete', 'id' => $zov->id]); ?>">Удалить</a>
                    </td>
                </tr>

            <?php endforeach;?>
            </tbody>
        </table>
    <?php endif;?>

</div>
