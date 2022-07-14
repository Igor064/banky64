<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MiniGallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mini-gallery-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'url[]')->fileInput(['multiple' => true, 'accept' => 'image/*'])->hint('Максимум 10 фотографий за раз. Формат: png, jpg и jpeg') ?>

    <div class="form-group">
        <?= Html::submitButton('Загрузить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
