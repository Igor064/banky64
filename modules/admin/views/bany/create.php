<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Room */

$this->title = 'Создание';
$this->params['breadcrumbs'][] = ['label' => 'Бани', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
