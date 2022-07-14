<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BlacklistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Черный список';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blacklist-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'number',
            'comment:ntext',
            //'time_create:datetime',
            [
                'class' => ActionColumn::className(),
                /*'urlCreator' => function ($action, Blacklist $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }*/
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
