<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AfishSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Афишы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="afish-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать Афишу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'description:html',
            'content:html',
            //'phone:html',
            //'image',
            [
                'format' =>'html',
                'label'=> 'image',
                'value'=>function($data){
                    return Html::img($data->getImage(),['width'=>200]);
                }
            ],
            [
                'attribute'=>'catalog_id',
                'value'=> function($data){
                    return $data->catalog->title;
                },
            ],

            // 'viewed',
            // 'catalog_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
