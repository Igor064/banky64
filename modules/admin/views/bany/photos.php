<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Room */
/* @var $upForm \app\models\PhotosForm */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Бани', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Загрузка фото';
?>

<div class="mini-gallery-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($upForm, 'files[]')->fileInput(['multiple' => true, 'accept' => 'image/*'])->hint('Максимум 10 фотографий за раз. Формат: png, jpg и jpeg') ?>

    <div class="form-group">
        <?= Html::submitButton('Загрузить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
