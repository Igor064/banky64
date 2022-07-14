<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Blacklist */

$this->title = 'Добавление';
$this->params['breadcrumbs'][] = ['label' => 'Черный список', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blacklist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
