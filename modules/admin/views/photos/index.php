<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MiniGallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мини галерея';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mini-gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Загрузить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'url:url',
            [
                'class' => ActionColumn::className(),
                'template' => "{delete}",
                /*'urlCreator' => function ($action, MiniGallery $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }*/
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
