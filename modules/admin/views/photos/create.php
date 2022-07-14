<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MiniGallery */

$this->title = 'Загрузка фотографий';
$this->params['breadcrumbs'][] = ['label' => 'Мини галерея', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mini-gallery-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
