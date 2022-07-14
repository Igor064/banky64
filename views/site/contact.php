<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="contacts" style="margin-top: 60px;">
    <div class="container" style="position: relative; z-index: 2; pointer-events: none;">
        <?= $this->render("_contact"); ?>
    </div>
    <div class="contacts__map__wrap wow fadeInUp">

    </div>
</section>